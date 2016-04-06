<?php

class auth2 extends MX_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url_helper', 'form'));
    }
    public function session($provider)
    {
        
        //$this->load->spark('oauth2/0.3.1');

        $provider = $this->oauth2->provider($provider, array(
            'id' => '872365952794421',
            'secret' => 'ffc6b9458fc8139a7b30b53e8d567547',
        ));

        if ( ! $this->input->get('code'))
        {
            // By sending no options it'll come back here
            $provider->authorize();
        }
        else
        {
            //what is it?
            try
            {
                $token = $provider->access($_GET['code']);

                $user = $provider->get_user_info($token);

                // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                echo "<pre>Tokens: ";
                var_dump($token);

                echo "\n\nUser Info: ";
                var_dump($user);
                $this->session->set_userdata('reg_info', $user);
                redirect('auth2/signup');
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }

        $this->load->view('auth2/session');
    }

    public function signup(){
        $this->load->view('auth2/register');    
    }
}