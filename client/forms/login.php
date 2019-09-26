<?php 
    require 'form_abstract.php';
    class Login extends Form{
        protected function view ($valid){
            return  "   
                        <div id ='pad'>
                           
                                <input class = 'btn' type = button value= 'Sing Up' />
                                                   
                        </div>

                        <div class = formular_holder>
                            <form>
                                <input type ='text' name='username' placeholder = 'Username'/>
                                </br>
                                </br>
                                <input type ='text' name='password' placeholder = 'Password'/>
                                </br>
                                </br>
                                <input type ='button'/>
                            </form>

                        </div>
                    ";
        }
    }
?>