  <?php
    class Deur {
        private bool opSlot;
        private bool deuropening;
        public string deurNaam;

        public function construct(deurNaam)
        {
        this->opSlot = true; // De deur is op slot en moet worden geopend met een sleutel
        this->deuropening = false; // De deur is dicht en moet met de klink worden opengemaakt
	    // De deur moet nog de opgegeven naam krijgen (uit de parameter)
        }

        public function sleutelGebruiken(richting){
        switch(richting) {
            case "links":
            // ontgrendelen
            break;
            case "rechts":
            // vergrendelen
            break;
            default:
            // wat kun je nog meer doen met een sleutel/slot? 🤔
            break;
        }
        }   

        public function deurOpenen() {
        // Niet mogelijk als de deur op slot is!
        }

        public function doorDeurLopen() {
        // Alleen wanneer de deur ontgrendeld en open is, kun je door de deur lopen.
        // Anders moet er een foutmelding worden weergegeven.
        }

    }
  ?>