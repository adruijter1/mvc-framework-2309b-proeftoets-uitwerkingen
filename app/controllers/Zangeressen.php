<?php

class Zangeressen extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('Zangeres');
    }

    public function index()
    {
        /**
         * Haal de namen van de zangeressen op uit de database
         * en zet deze in een array van objecten
         */
        $zangeressen = $this->zangeresModel->getZangeressen();

        /**
         * Maak een lege variabele aan waarin we de rijen (<tr> en <td>) kunnen zetten
         * met info uit de database
         */
        $dataRows = '';

        /**
         * Maak de string met rij-informatie uit de database
         */
        foreach ($zangeressen as $zangeres) {
            $dataRows .= "<tr> 
                            <td>$zangeres->Naam</td>
                            <td>$zangeres->NettoWaarde</td>
                            <td>$zangeres->Land</td>
                            <td>$zangeres->Mobiel</td>
                            <td>$zangeres->Leeftijd</td>
                         </tr>";
        }

        /**
         * Maak een $data array met info die weergegeven kan worden in de view
         */
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'dataRows' => $dataRows
        ];

        /**
         * Koppel een view aan de controller-method en geef het $data-array mee
         * aan de view
         */
        $this->view('zangeressen/index', $data);
    }

}