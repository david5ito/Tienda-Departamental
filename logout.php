<?php
 //Log out
 session_start();
 if(session_destroy()){
     include("Login.html");
 }
?>