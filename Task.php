<?php
class Task{
   private $description=" ";
   private $completed=" ";
   private $date_created=" ";
   private $date_completed=" ";
    
   public function getDescription(){
      return $this->description;
   }
   public function setDescription($_desc){
      $this->description = $_desc;
   }
   public function getCompleted(){
      return $this->completed;
   }
   public function setCompleted($_comp){
      $this->completed = $_comp;
   }
   public function getDateCreated(){
      return $this->date_created;
   }
   public function setDateCreated($_dcreat){
      $this->date_created = $_dcreat;
   }
   public function getDateCompleted(){
      return $this->date_completed;
   }
   public function setDateCompleted($_dcomp){
      $this->date_completed = $_dcomp;
   }
}
