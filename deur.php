
<?php

class Deur {
    private bool $opSlot;
    private bool $deuropening;
    public string $deurNaam;

    public function __construct($deurNaam) {
        $this->opSlot = true;
        $this->deuropening = false;
        $this->deurNaam = $deurNaam;
    }

    public function sleutelGebruiken($richting) {
        switch ($richting) {
            case "links":
                $this->opSlot = false;
                return "Deur is ontgrendeld";

            case "rechts":
                $this->opSlot = true;
                $this->deuropening = false;
                return "Deur is vergrendeld";

            default:
                return "Ongeldige richting!";
        }
    }

    public function deurOpenen() {
        if ($this->opSlot) {
            return "Deur is nog op slot en kan niet open";
        }

        $this->deuropening = true;
        return "Deur is geopend!";
    }

    public function doorDeurLopen() {
        if ($this->opSlot || !$this->deuropening) {
            return "Je stoot tegen de " . $this->deurNaam . "!";
        }

        return "Je bent in je huiskamer!";
    }
}
?>
