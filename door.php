<?php
    class Deur {
        // private properties to hold the state of the door
        private bool $opSlot;
        private bool $deuropening;
        public string $deurNaam;

        // Constructor to initialize the door with a name and default states
        public function __construct($deurNaam) {
            $this->opSlot = true; 
            $this->deuropening = false; 
            $this->deurNaam = $deurNaam; 
        }

        // Method to use the key in a specific direction
        public function sleutelGebruiken($richting) {
            switch($richting) {
                case "links":
                    $this->opSlot = false;
                    return "Deur is ontgrendeld";
                case "rechts":
                    $this->opSlot = true;
                    return $this->deurNaam . " is op slot";
                default:
                    return "Wat kun je nog meer doen met een sleutel?";
            }
        } 

        // Method to open the door if it's unlocked
        public function deurOpenen() {
            if ($this->opSlot) {
                return "Deur is nog op slot en kan niet open";
            } else {
                $this->deuropening = true;
                return "Deur is geopend!";
            }
        }

        // Method to simulate walking through the door
        public function doorDeurLopen() {
            if ($this->opSlot) {
                return "Voordeur is nog op slot";
            } elseif (!$this->deuropening) {
                return "Je stoot tegen de " . $this->deurNaam . "!";
            } else {
                return "Je bent in je huiskamer!";
            }
        }
    }
?>