<?php 

class Student {

  /*
  * student 
  */

    private $insert_student="insert into database_aouetef.student (f_name,l_name,date_birth,parent_id,year_id)values(?,?,?,?,?);";
    private $verfie_student="select id from database_aouetef.student where f_name=? and l_name=? and year_id=?;
    ";

    /*
    *  parent 
    */
    private $insert_parent="insert into database_aouetef.parent_student (numero,n_parent)values(?,?);";
    private $verfie_parent="select id from database_aouetef.parent_student where numero=? and n_parent=?;";

   
    /*
    *
    *  add class of this student
    */
    private $student_class="insert into database_aouetef.student_class (student_id,class_id)values(?,?);";




  public function __construct()
  {
    $this->db=new Database();
  }


    /*
    * 
    * insert parent if it is not exicte
    *
    */

    public function insert_parent($parent_n,$parent_nbr){

      $this->db->preparedstmt($this->insert_parent);
      $this->db->bind_Value(1,$parent_nbr,null);
      $this->db->bind_Value(2,$parent_n,null);
      $this->db->executeQuery();

    }

    /*
    * verfie if the parent exicite in table  and return id 
    *
    */
    public function verfie_parent($parent_n,$parent_nbr){

      $this->db->preparedstmt($this->verfie_parent);
      $this->db->bind_Value(1,$parent_nbr,null);
      $this->db->bind_Value(2,$parent_n,null);
      $parent_id=$this->db->fetch();
      if(isset($parent_id) && $parent_id == ""){
        $parent_id=0;
      }
      return $parent_id;

    }


    /*
    *   insert student 
    *
    */

    
    public function insert_student($f_name,$l_name,$date,$parent_id,$year_id){
      $this->db->preparedstmt($this->insert_student);
      $this->db->bind_Value(1,$f_name,null);
      $this->db->bind_Value(2,$l_name,null);
      $this->db->bind_Value(3,$date,null);
      $this->db->bind_Value(4,$parent_id,null);
      $this->db->bind_Value(5,$year_id,null);
      $this->db->executeQuery();


    }
 /*
    * verfie if the student exicite in table  and get the  id 
    *
    */
    public function verfie_student($f_name,$l_name,$year_id){

      $this->db->preparedstmt($this->verfie_student);
      $this->db->bind_Value(1,$f_name,null);
      $this->db->bind_Value(2,$l_name,null);
      $this->db->bind_Value(3,$year_id,null);
      $student_id=$this->db->fetch();
      if(isset($student_id) && $student_id == ""){
        $student_id=0;
      }
      return $student_id;

    }



    /*
    * 
    * insert class of this student  if it is not exicte
    *
    */

    public function insert_student_class($student_id,$parent_id){

      $this->db->preparedstmt($this->student_class);
      $this->db->bind_Value(1,$student_id,null);
      $this->db->bind_Value(2,$parent_id,null);
      $this->db->executeQuery();

    }


    


}

