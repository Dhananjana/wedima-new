<?php

class Vendor extends CI_Controller
{
    private $upload_path ="./uploads/profile";
    private $upload_path1 ="./uploads/cover";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vendor_model');
        $this->load->model('Home_model');
         $this->load->model('evencal_model', 'evencal');
  $this->load->library('calendar', $this->_setting());
    }

    public function index($year = null, $month = null, $day = null){
        if(($this->session->userdata('logged')==1) &($this->session->userdata('utype')=='vendor')) {
            $year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
              $month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
              $day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
               
              $date      = $this->evencal->getDateEvent($year, $month);
              $cur_event = $this->evencal->getEvent($year, $month, $day);
              $datax= array(
                  'notes' => $this->calendar->generate($year, $month, $date),
                  'year'  => $year, 
                  'mon'   => $month,
                  'month' => $this->_month($month),
                  'day'   => $day,
                  'events'=> $cur_event
                 );
          

            $data['menu'] = $this->load->view('index',$datax, TRUE);

            $data['details'] = $this->Vendor_model->get_details();
            $data['nav1'] = $this->load->view('templates/header1', NULL, TRUE);
            $data['packages'] = $this->Vendor_model->get_packages();
            $data['images'] = $this->Vendor_model->vendor_gallery();

            $data['albums'] = $this->Vendor_model->get_albums();
            $this->load->view('templates/header');
//            $prefs = array(
//                    'show_next_prev'  => TRUE,
//                    'next_prev_url'   => 'http://example.com/index.php/calendar/show/'
//            );
           
            $this->load->view('vendor/profile', $data);
            $this->load->view('templates/footer');

        }

        else{
            redirect('login');
        }


    }
    public function ajax_edit($id)
    {
        $data = $this->Vendor_model->get_by_id($id);
        echo json_encode($data);
    }
    
    public function mobile_update()
    {
        $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
            );
       
        $this->Vendor_model->mobile_update(array('id' => $this->input->post('id')), $data);
           echo json_encode(array("status" => TRUE));
    }

     public function ajax_edit_details()
    {
        $data = $this->Vendor_model->get_by_id_details();
        echo json_encode($data);
    }
    
    public function mobile_updatedetails()
    {
        $data = array(
               
                'description' =>  $this->input->post('description'),
                 'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone'),
                 'serviceArea' => $this->input->post('serviceArea'),
            );

       
        $this->Vendor_model->mobile_updatedetail(array('id' => $this->input->post('id')), $data);
           echo json_encode(array("status" => TRUE));
    }

    //  public function ajax_edit1($id)
    // {
    //     $data = $this->Vendor_model->get_by_id1($id);
    //     echo json_encode($data);
    // }
    
    // public function mobile_update1()
    // {
    //     $data = array(
    //             'description' => $this->input->post('description'),
    //             'price' => $this->input->post('price'),
    //         );
       
    //     $this->Vendor_model->mobile_update1(array('id' => $this->input->post('id')), $data);
    //        echo json_encode(array("status" => TRUE));
       
        
    // }
    public function add_packages(){

        $this->Vendor_model->add_packages();

        echo json_encode(array("status" => TRUE));
    }
   
    public function delete_packages($id){

        $this->Vendor_model->delete_packages($id);
        echo json_encode(array("status" => TRUE));
    }
          
  
    public function ppUp(){
        if(! empty($_FILES)){
            $config["upload_path"]= $this->upload_path;
            $config["allowed_types"]="gif|png|jpg";
            $this->load->library('upload',$config);
            $this->upload->do_upload("file");
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $this->Vendor_model->ppUp($file_name);
        }
    }

    public function remove(){
        $file =$this->input->post("file");
        if($file && file_exists($this->upload_path."/".$file)){
            unlink($this->upload_path."/".$file);
        }
    }


    public function coverUp(){
        if(! empty($_FILES)){
            $config["upload_path"]= $this->upload_path1;
            $config["allowed_types"]="gif|png|jpg";
            $this->load->library('upload',$config);
            $this->upload->do_upload("file");
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $this->Vendor_model->coverUp($file_name);

        }
    }

    public function Cremove(){
        $file =$this->input->post("file");
        if($file && file_exists($this->upload_path1."/".$file)){
            unlink($this->upload_path1."/".$file);
        }
    }

    public function profileView(){
        $name= $this->uri->segment(3);
        $Name=urldecode($name);
        $data1['vendor']=$this->Vendor_model->get_vendor_name();
        if($data1['vendor']==$Name){
            redirect('vendor');
        }
        else {
            $data['isbookmark']=$this->Vendor_model->bookmarkload($Name);
            $data['details'] = $this->Vendor_model->view_profile($Name);
            $data['packages'] = $this->Vendor_model->pacakges($Name);
            $data['albums']=$this->Vendor_model->get_album_details($Name);
            $data['images']=$this->Vendor_model->get_gallery($Name);

            $this->load->view('templates/header');
            $this->load->view('profileView', $data);
            $this->load->view('templates/footer');
        }

    }
    public function create_album(){
        $json = array();
        $cpt = count($_FILES['image']['name']);
        $files = $_FILES;
        $directory = FCPATH . 'albums/' . $this->input->get('Album_Name');

        if (is_dir($directory)) {
           mkdir($directory . '/' . $this->input->post('Album_Name'), 0777);
           $json['success'] = 'The folder ' . $this->input->post('Album_Name') . 'was created!';
        } else {
           $json['error'] = 'The folder ' . $this->input->post('Album_Name') . 'was not created!';
        }



        $this->output->set_content_type('Content-Type: application/json');
        $this->output->set_output(json_encode($json));
        $data1['id']=$this->Vendor_model->create_album();
        $data1['user']=$this->Vendor_model->get_user();
        $config["upload_path"]='albums/' . $this->input->post('Album_Name');
        $config["allowed_types"]="gif|png|jpg";
        $this->load->library('upload',$config);

    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['image']['name']= $files['image']['name'][$i];
        $_FILES['image']['type']= $files['image']['type'][$i];
        $_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
        $_FILES['image']['error']= $files['image']['error'][$i];
        $_FILES['image']['size']= $files['image']['size'][$i];    

         // $this->upload->initialize($config);
         $this->upload->do_upload('image');
         $upload_data[] = $this->upload->data();
    }


        for($i=0; $i<$cpt; $i++){
            $data=array(
                'image_name'=>$upload_data[$i]['file_name'],
                'album_id'=>$data1['id'],
                'user_id'=>$data1['user'],
                 );
             $this->Vendor_model->insert_img($data);
        }
     
        redirect('vendor');
        }


    public function bookmark(){
        $name=$_POST['name'];
        $this->Vendor_model->bookmark($name);
        echo json_encode(array("data"=>'Sucsses'));


    }


    public function unbookmark(){
        $name=$_POST['name'];
        $this->Vendor_model->unbookmark($name);

        echo json_encode(array("data"=>'Sucsses'));
    }
    function _month($month){
  $month = (int) $month;
  switch($month){
   case 1 : $month = 'Januari'; Break;
   case 2 : $month = 'Februari'; Break;
   case 3 : $month = 'Maret'; Break;
   case 4 : $month = 'April'; Break;
   case 5 : $month = 'Mei'; Break;
   case 6 : $month = 'Juni'; Break;
   case 7 : $month = 'Juli'; Break;
   case 8 : $month = 'Agustus'; Break;
   case 9 : $month = 'September'; Break;
   case 10 : $month = 'Oktober'; Break;
   case 11 : $month = 'November'; Break;
   case 12 : $month = 'Desember'; Break;
  }
  return $month;
 }
  
 // get detail event for selected date
 function detail_event(){  
  $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
  $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
  $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
   
  if ($this->form_validation->run() == FALSE){
   echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
  }else{
   $data = $this->evencal->getEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'));
   if($data == null){
    echo json_encode(array('status' => false, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
   }else{   
    echo json_encode(array('status' => true, 'data' => $data));
   }
  }
 }
  
 // popup for adding event
 function add_event(){
  $data = array(
     'day'   => $this->input->post('day'),
     'mon'   => $this->input->post('mon'),
     'month' => $this->_month($this->input->post('mon')),
     'year'  => $this->input->post('year'),
    );
  $this->load->view('add_event', $data);
 }
  
 // do adding event for selected date
 function do_add(){
  $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
  $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
  $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
  $this->form_validation->set_rules('hour', 'Hour', 'trim|required|xss_clean');
  $this->form_validation->set_rules('minute', 'Minute', 'trim|required|xss_clean');
  $this->form_validation->set_rules('event', 'Event', 'trim|required|xss_clean');
   
  if ($this->form_validation->run() == FALSE){
   echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
  }else{
   $this->evencal->addEvent($this->input->post('year'), 
            $this->input->post('mon'), 
            $this->input->post('day'), 
            $this->input->post('hour').":".$this->input->post('minute').":00",
            $this->input->post('event'));
   echo json_encode(array('status' => true, 'time' => $this->input->post('time'), 'event' => $this->input->post('event')));
  }
 }
  
 // delete event
 function delete_event(){
  $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
  $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
  $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
  $this->form_validation->set_rules('del', 'ID', 'trim|required|is_natural_no_zero|xss_clean');
   
  if ($this->form_validation->run() == FALSE){
   echo json_encode(array('status' => false));
  }else{
   $rows = $this->evencal->deleteEvent($this->input->post('year'),$this->input->post('mon'),$this->input->post('day'), $this->input->post('del'));
   if($rows > 0){
    echo json_encode(array('status' => true, 'row' => $rows));
   }else{
    echo json_encode(array('status' => true, 'row' => $rows, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
   }
  }
 }
  
 // same as index() function
 function detail($year = null, $month = null, $day = null){
  $year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
  $month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
  $day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
   
  $date      = $this->evencal->getDateEvent($year, $month);
  $cur_event = $this->evencal->getEvent($year, $month, $day);
  $data     = array(
      'notes' => $this->calendar->generate($year, $month, $date),
      'year'  => $year,
      'mon'   => $month,
      'month' => $this->_month($month),
      'day'   => $day,
      'events'=> $cur_event
     );
  $this->load->view('index', $data);
 }
  
 // setting for calendar
 function _setting(){
  return array(
   'start_day'   => 'monday',
   'show_next_prev'  => true,
   'next_prev_url'  => site_url('evencal/index'),
   'month_type'     => 'long',
            'day_type'       => 'short',
   'template'    => '{table_open}<table class="date">{/table_open}
           {heading_row_start}&nbsp;{/heading_row_start}
           {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date" title="Previous Month">&lt;&lt;Prev</a>{/heading_previous_cell}
           {heading_title_cell}{heading}{/heading_title_cell}
           {heading_next_cell}<a href="{next_url}" class="next_date"  title="Next Month">Next&gt;&gt;</a></caption>{/heading_next_cell}
           {heading_row_end}<col class="weekday" span="5"><col class="weekend_sat"><col class="weekend_sun">{/heading_row_end}
           {week_row_start}<thead><tr>{/week_row_start}
           {week_day_cell}<th>{week_day}</th>{/week_day_cell}
           {week_row_end}</tr></thead><tbody>{/week_row_end}
           {cal_row_start}<tr>{/cal_row_start}
           {cal_cell_start}<td>{/cal_cell_start}
           {cal_cell_content}<div class="date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content}
           {cal_cell_content_today}<div class="active_date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content_today}
           {cal_cell_no_content}<div class="no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content}
           {cal_cell_no_content_today}<div class="active_no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content_today}
           {cal_cell_blank}&nbsp;{/cal_cell_blank}
           {cal_cell_end}</td>{/cal_cell_end}
           {cal_row_end}</tr>{/cal_row_end}
           {table_close}</tbody></table>{/table_close}');
 }



}