<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Wise
 *
 * @author NB
 */
class Wise extends Application {
    
    public function bingo() 
    {
        $this->data['pagebody'] = 'justone';
            
        $source = $this->quotes->get(6);

        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }
}
