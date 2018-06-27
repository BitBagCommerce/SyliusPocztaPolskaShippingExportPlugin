<?php

class urzadWydaniaEPrzesylkiType extends placowkaPocztowaType
{

    /**
     * @param int $id
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param anonymous127 $kodPocztowy
     * @param anonymous128 $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param boolean $punktWydaniaEPrzesylki
     * @param boolean $powiadomienieSMS
     * @param boolean $punktWydaniaPrzesylkiBiznesowejPlus
     * @param boolean $punktWydaniaPrzesylkiBiznesowej
     * @param siecPlacowekEnum $siecPlacowek
     * @param string $idZPO
     */
    public function __construct($id, $prefixNazwy, $nazwa, $wojewodztwo, $powiat, $miejsce, $kodPocztowy, $miejscowosc, $ulica, $numerDomu, $numerLokalu, $nazwaWydruk, $punktWydaniaEPrzesylki, $powiadomienieSMS, $punktWydaniaPrzesylkiBiznesowejPlus, $punktWydaniaPrzesylkiBiznesowej, $siecPlacowek, $idZPO)
    {
      parent::__construct($id, $prefixNazwy, $nazwa, $wojewodztwo, $powiat, $miejsce, $kodPocztowy, $miejscowosc, $ulica, $numerDomu, $numerLokalu, $nazwaWydruk, $punktWydaniaEPrzesylki, $powiadomienieSMS, $punktWydaniaPrzesylkiBiznesowejPlus, $punktWydaniaPrzesylkiBiznesowej, $siecPlacowek, $idZPO);
    }

}
