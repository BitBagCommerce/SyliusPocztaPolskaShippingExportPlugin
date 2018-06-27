<?php

class ElektronicznyNadawca extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'addShipment' => '\\addShipment',
      'addShipmentResponse' => '\\addShipmentResponse',
      'przesylkaType' => '\\przesylkaType',
      'pocztexKrajowyType' => '\\pocztexKrajowyType',
      'changePassword' => '\\changePassword',
      'changePasswordResponse' => '\\changePasswordResponse',
      'paczkaPocztowaType' => '\\paczkaPocztowaType',
      'paczkaPocztowaPLUSType' => '\\paczkaPocztowaPLUSType',
      'przesylkaPobraniowaType' => '\\przesylkaPobraniowaType',
      'przesylkaNaWarunkachSzczegolnychType' => '\\przesylkaNaWarunkachSzczegolnychType',
      'przesylkaPoleconaKrajowaType' => '\\przesylkaPoleconaKrajowaType',
      'przesylkaHandlowaType' => '\\przesylkaHandlowaType',
      'przesylkaListowaZadeklarowanaWartoscType' => '\\przesylkaListowaZadeklarowanaWartoscType',
      'przesylkaFullType' => '\\przesylkaFullType',
      'errorType' => '\\errorType',
      'adresType' => '\\adresType',
      'sendEnvelope' => '\\sendEnvelope',
      'sendEnvelopeResponseType' => '\\sendEnvelopeResponseType',
      'getUrzedyNadania' => '\\getUrzedyNadania',
      'getUrzedyNadaniaResponse' => '\\getUrzedyNadaniaResponse',
      'clearEnvelope' => '\\clearEnvelope',
      'clearEnvelopeResponse' => '\\clearEnvelopeResponse',
      'urzadNadaniaFullType' => '\\urzadNadaniaFullType',
      'ePrzesylkaType' => '\\ePrzesylkaType',
      'urzadWydaniaEPrzesylkiType' => '\\urzadWydaniaEPrzesylkiType',
      'pobranieType' => '\\pobranieType',
      'przesylkaPoleconaZagranicznaType' => '\\przesylkaPoleconaZagranicznaType',
      'przesylkaZadeklarowanaWartoscZagranicznaType' => '\\przesylkaZadeklarowanaWartoscZagranicznaType',
      'getUrzedyWydajaceEPrzesylki' => '\\getUrzedyWydajaceEPrzesylki',
      'getUrzedyWydajaceEPrzesylkiResponse' => '\\getUrzedyWydajaceEPrzesylkiResponse',
      'uploadIWDContent' => '\\uploadIWDContent',
      'getEnvelopeStatus' => '\\getEnvelopeStatus',
      'getEnvelopeStatusResponse' => '\\getEnvelopeStatusResponse',
      'downloadIWDContent' => '\\downloadIWDContent',
      'downloadIWDContentResponse' => '\\downloadIWDContentResponse',
      'przesylkaShortType' => '\\przesylkaShortType',
      'addShipmentResponseItemType' => '\\addShipmentResponseItemType',
      'getKarty' => '\\getKarty',
      'getKartyResponse' => '\\getKartyResponse',
      'getPasswordExpiredDate' => '\\getPasswordExpiredDate',
      'getPasswordExpiredDateResponse' => '\\getPasswordExpiredDateResponse',
      'setAktywnaKarta' => '\\setAktywnaKarta',
      'setAktywnaKartaResponse' => '\\setAktywnaKartaResponse',
      'getEnvelopeContentFull' => '\\getEnvelopeContentFull',
      'getEnvelopeContentFullResponse' => '\\getEnvelopeContentFullResponse',
      'getEnvelopeContentShort' => '\\getEnvelopeContentShort',
      'getEnvelopeContentShortResponse' => '\\getEnvelopeContentShortResponse',
      'hello' => '\\hello',
      'helloResponse' => '\\helloResponse',
      'kartaType' => '\\kartaType',
      'getAddressLabel' => '\\getAddressLabel',
      'getAddressLabelResponse' => '\\getAddressLabelResponse',
      'addressLabelContent' => '\\addressLabelContent',
      'getOutboxBook' => '\\getOutboxBook',
      'getOutboxBookResponse' => '\\getOutboxBookResponse',
      'getFirmowaPocztaBook' => '\\getFirmowaPocztaBook',
      'getFirmowaPocztaBookResponse' => '\\getFirmowaPocztaBookResponse',
      'getEnvelopeList' => '\\getEnvelopeList',
      'getEnvelopeListResponse' => '\\getEnvelopeListResponse',
      'envelopeInfoType' => '\\envelopeInfoType',
      'przesylkaZagranicznaType' => '\\przesylkaZagranicznaType',
      'przesylkaRejestrowanaType' => '\\przesylkaRejestrowanaType',
      'przesylkaNieRejestrowanaType' => '\\przesylkaNieRejestrowanaType',
      'przesylkaBiznesowaType' => '\\przesylkaBiznesowaType',
      'subPrzesylkaBiznesowaType' => '\\subPrzesylkaBiznesowaType',
      'subPrzesylkaBiznesowaPlusType' => '\\subPrzesylkaBiznesowaPlusType',
      'getAddresLabelByGuid' => '\\getAddresLabelByGuid',
      'getAddresLabelByGuidResponse' => '\\getAddresLabelByGuidResponse',
      'przesylkaBiznesowaPlusType' => '\\przesylkaBiznesowaPlusType',
      'pakietType' => '\\pakietType',
      'opakowanieType' => '\\opakowanieType',
      'getPlacowkiPocztowe' => '\\getPlacowkiPocztowe',
      'getPlacowkiPocztoweResponse' => '\\getPlacowkiPocztoweResponse',
      'getGuid' => '\\getGuid',
      'getGuidResponse' => '\\getGuidResponse',
      'kierunekType' => '\\kierunekType',
      'getKierunki' => '\\getKierunki',
      'getKierunkiResponse' => '\\getKierunkiResponse',
      'getKierunkiInfo' => '\\getKierunkiInfo',
      'getKierunkiInfoResponse' => '\\getKierunkiInfoResponse',
      'uslugiType' => '\\uslugiType',
      'placowkaPocztowaType' => '\\placowkaPocztowaType',
      'punktWydaniaPrzesylkiBiznesowejPlus' => '\\punktWydaniaPrzesylkiBiznesowejPlus',
      'getEnvelopeBufor' => '\\getEnvelopeBufor',
      'getEnvelopeBuforResponse' => '\\getEnvelopeBuforResponse',
      'clearEnvelopeByGuids' => '\\clearEnvelopeByGuids',
      'clearEnvelopeByGuidsResponse' => '\\clearEnvelopeByGuidsResponse',
      'zwrotDokumentowType' => '\\zwrotDokumentowType',
      'odbiorPrzesylkiOdNadawcyType' => '\\odbiorPrzesylkiOdNadawcyType',
      'potwierdzenieDoreczeniaType' => '\\potwierdzenieDoreczeniaType',
      'rodzajListType' => '\\rodzajListType',
      'potwierdzenieOdbioruType' => '\\potwierdzenieOdbioruType',
      'doreczenieType' => '\\doreczenieType',
      'doreczenieUslugaPocztowaType' => '\\doreczenieUslugaPocztowaType',
      'doreczenieUslugaKurierskaType' => '\\doreczenieUslugaKurierskaType',
      'paczkaZagranicznaType' => '\\paczkaZagranicznaType',
      'setEnvelopeBuforDataNadania' => '\\setEnvelopeBuforDataNadania',
      'setEnvelopeBuforDataNadaniaResponse' => '\\setEnvelopeBuforDataNadaniaResponse',
      'lokalizacjaGeograficznaType' => '\\lokalizacjaGeograficznaType',
      'wspolrzednaGeograficznaType' => '\\wspolrzednaGeograficznaType',
      'zwrotType' => '\\zwrotType',
      'listZwyklyType' => '\\listZwyklyType',
      'listZwyklyFirmowyType' => '\\listZwyklyFirmowyType',
      'reklamowaType' => '\\reklamowaType',
      'getEPOStatus' => '\\getEPOStatus',
      'getEPOStatusResponse' => '\\getEPOStatusResponse',
      'EPOType' => '\\EPOType',
      'EPOSimpleType' => '\\EPOSimpleType',
      'EPOExtendedType' => '\\EPOExtendedType',
      'przesylkaEPOType' => '\\przesylkaEPOType',
      'przesylkaFirmowaPoleconaType' => '\\przesylkaFirmowaPoleconaType',
      'EPOInfoType' => '\\EPOInfoType',
      'awizoPrzesylkiType' => '\\awizoPrzesylkiType',
      'doreczeniePrzesylkiType' => '\\doreczeniePrzesylkiType',
      'zwrotPrzesylkiType' => '\\zwrotPrzesylkiType',
      'getAddresLabelCompact' => '\\getAddresLabelCompact',
      'getAddresLabelCompactResponse' => '\\getAddresLabelCompactResponse',
      'getAddresLabelByGuidCompact' => '\\getAddresLabelByGuidCompact',
      'getAddresLabelByGuidCompactResponse' => '\\getAddresLabelByGuidCompactResponse',
      'ubezpieczenieType' => '\\ubezpieczenieType',
      'EMSType' => '\\EMSType',
      'getEnvelopeBuforList' => '\\getEnvelopeBuforList',
      'getEnvelopeBuforListResponse' => '\\getEnvelopeBuforListResponse',
      'buforType' => '\\buforType',
      'createEnvelopeBufor' => '\\createEnvelopeBufor',
      'createEnvelopeBuforResponse' => '\\createEnvelopeBuforResponse',
      'moveShipments' => '\\moveShipments',
      'moveShipmentsResponse' => '\\moveShipmentsResponse',
      'updateEnvelopeBufor' => '\\updateEnvelopeBufor',
      'updateEnvelopeBuforResponse' => '\\updateEnvelopeBuforResponse',
      'getUbezpieczeniaInfo' => '\\getUbezpieczeniaInfo',
      'getUbezpieczeniaInfoResponse' => '\\getUbezpieczeniaInfoResponse',
      'ubezpieczeniaInfoType' => '\\ubezpieczeniaInfoType',
      'isMiejscowa' => '\\isMiejscowa',
      'isMiejscowaResponse' => '\\isMiejscowaResponse',
      'trasaRequestType' => '\\trasaRequestType',
      'trasaResponseType' => '\\trasaResponseType',
      'deklaracjaCelnaType' => '\\deklaracjaCelnaType',
      'szczegolyDeklaracjiCelnejType' => '\\szczegolyDeklaracjiCelnejType',
      'przesylkaPaletowaType' => '\\przesylkaPaletowaType',
      'paletaType' => '\\paletaType',
      'platnikType' => '\\platnikType',
      'subPrzesylkaPaletowaType' => '\\subPrzesylkaPaletowaType',
      'getBlankietPobraniaByGuids' => '\\getBlankietPobraniaByGuids',
      'getBlankietPobraniaByGuidsResponse' => '\\getBlankietPobraniaByGuidsResponse',
      'updateAccount' => '\\updateAccount',
      'updateAccountResponse' => '\\updateAccountResponse',
      'accountType' => '\\accountType',
      'getAccountList' => '\\getAccountList',
      'getAccountListResponse' => '\\getAccountListResponse',
      'profilType' => '\\profilType',
      'getProfilList' => '\\getProfilList',
      'getProfilListResponse' => '\\getProfilListResponse',
      'updateProfil' => '\\updateProfil',
      'updateProfilResponse' => '\\updateProfilResponse',
      'uslugaPaczkowaType' => '\\uslugaPaczkowaType',
      'subUslugaPaczkowaType' => '\\subUslugaPaczkowaType',
      'uslugaKurierskaType' => '\\uslugaKurierskaType',
      'subUslugaKurierskaType' => '\\subUslugaKurierskaType',
      'createAccount' => '\\createAccount',
      'createAccountResponse' => '\\createAccountResponse',
      'createProfil' => '\\createProfil',
      'createProfilResponse' => '\\createProfilResponse',
      'potwierdzenieOdbioruPaczkowaType' => '\\potwierdzenieOdbioruPaczkowaType',
      'zwrotDokumentowKurierskaType' => '\\zwrotDokumentowKurierskaType',
      'potwierdzenieOdbioruKurierskaType' => '\\potwierdzenieOdbioruKurierskaType',
      'addReklamacje' => '\\addReklamacje',
      'addReklamacjeResponse' => '\\addReklamacjeResponse',
      'getReklamacje' => '\\getReklamacje',
      'getReklamacjeResponse' => '\\getReklamacjeResponse',
      'getZapowiedziFaktur' => '\\getZapowiedziFaktur',
      'getZapowiedziFakturResponse' => '\\getZapowiedziFakturResponse',
      'addOdwolanieDoReklamacji' => '\\addOdwolanieDoReklamacji',
      'addOdwolanieDoReklamacjiResponse' => '\\addOdwolanieDoReklamacjiResponse',
      'addRozbieznoscDoZapowiedziFaktur' => '\\addRozbieznoscDoZapowiedziFaktur',
      'addRozbieznoscDoZapowiedziFakturResponse' => '\\addRozbieznoscDoZapowiedziFakturResponse',
      'reklamowanaPrzesylkaType' => '\\reklamowanaPrzesylkaType',
      'powodReklamacjiType' => '\\powodReklamacjiType',
      'reklamacjaRozpatrzonaType' => '\\reklamacjaRozpatrzonaType',
      'getListaPowodowReklamacji' => '\\getListaPowodowReklamacji',
      'getListaPowodowReklamacjiResponse' => '\\getListaPowodowReklamacjiResponse',
      'powodSzczegolowyType' => '\\powodSzczegolowyType',
      'kategoriePowodowReklamacjiType' => '\\kategoriePowodowReklamacjiType',
      'listBiznesowyType' => '\\listBiznesowyType',
      'zamowKuriera' => '\\zamowKuriera',
      'zamowKurieraResponse' => '\\zamowKurieraResponse',
      'getEZDOList' => '\\getEZDOList',
      'getEZDOListResponse' => '\\getEZDOListResponse',
      'getEZDO' => '\\getEZDO',
      'getEZDOResponse' => '\\getEZDOResponse',
      'EZDOPakietType' => '\\EZDOPakietType',
      'EZDOPrzesylkaType' => '\\EZDOPrzesylkaType',
      'wplataCKPType' => '\\wplataCKPType',
      'getWplatyCKP' => '\\getWplatyCKP',
      'getWplatyCKPResponse' => '\\getWplatyCKPResponse',
      'globalExpresType' => '\\globalExpresType',
      'cancelReklamacja' => '\\cancelReklamacja',
      'cancelReklamacjaResponse' => '\\cancelReklamacjaResponse',
      'zalacznikDoReklamacjiType' => '\\zalacznikDoReklamacjiType',
      'addZalacznikDoReklamacji' => '\\addZalacznikDoReklamacji',
      'addZalacznikDoReklamacjiResponse' => '\\addZalacznikDoReklamacjiResponse',
      'updateShopEZwroty' => '\\updateShopEZwroty',
      'updateShopEZwrotyResponse' => '\\updateShopEZwrotyResponse',
      'shopEZwrotyType' => '\\shopEZwrotyType',
      'getListaZgodEZwrotow' => '\\getListaZgodEZwrotow',
      'getListaZgodEZwrotowResponse' => '\\getListaZgodEZwrotowResponse',
      'oczekujeNaZgodeEZwrotType' => '\\oczekujeNaZgodeEZwrotType',
      'setStatusZgodyNaEZwrot' => '\\setStatusZgodyNaEZwrot',
      'setStatusZgodyNaEZwrotResponse' => '\\setStatusZgodyNaEZwrotResponse',
      'statusZgodyEZwrotType' => '\\statusZgodyEZwrotType',
      'przesylkaEZwrotPocztexType' => '\\przesylkaEZwrotPocztexType',
      'przesylkaEZwrotPaczkaType' => '\\przesylkaEZwrotPaczkaType',
      'wyslijLinkaOStatusieEZwrotu' => '\\wyslijLinkaOStatusieEZwrotu',
      'wyslijLinkaOStatusieEZwrotuResponse' => '\\wyslijLinkaOStatusieEZwrotuResponse',
      'isObszarMiasto' => '\\isObszarMiasto',
      'isObszarMiastoResponse' => '\\isObszarMiastoResponse',
      'obszarAdresowyType' => '\\obszarAdresowyType',
      'obszarAdresowyResponseType' => '\\obszarAdresowyResponseType',
      'getPaczkaKorzysciInfo' => '\\getPaczkaKorzysciInfo',
      'infoPaczkaKorzysciType' => '\\infoPaczkaKorzysciType',
      'getPaczkaKorzysciInfoResponse' => '\\getPaczkaKorzysciInfoResponse',
      'reklamacjaInfoType' => '\\reklamacjaInfoType',
      'setJednostkaOrganizacyjna' => '\\setJednostkaOrganizacyjna',
      'setJednostkaOrganizacyjnaResponse' => '\\setJednostkaOrganizacyjnaResponse',
      'jednostkaOrganizacyjnaType' => '\\jednostkaOrganizacyjnaType',
      'getJednostkaOrganizacyjna' => '\\getJednostkaOrganizacyjna',
      'getJednostkaOrganizacyjnaResponse' => '\\getJednostkaOrganizacyjnaResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param addShipment $parameters
     * @return addShipmentResponse
     */
    public function addShipment(addShipment $parameters)
    {
      return $this->__soapCall('addShipment', array($parameters));
    }

    /**
     * @param changePassword $parameters
     * @return changePasswordResponse
     */
    public function changePassword(changePassword $parameters)
    {
      return $this->__soapCall('changePassword', array($parameters));
    }

    /**
     * @param sendEnvelope $parameters
     * @return sendEnvelopeResponseType
     */
    public function sendEnvelope(sendEnvelope $parameters)
    {
      return $this->__soapCall('sendEnvelope', array($parameters));
    }

    /**
     * @param getUrzedyNadania $parameters
     * @return getUrzedyNadaniaResponse
     */
    public function getUrzedyNadania(getUrzedyNadania $parameters)
    {
      return $this->__soapCall('getUrzedyNadania', array($parameters));
    }

    /**
     * @param clearEnvelope $parameters
     * @return clearEnvelopeResponse
     */
    public function clearEnvelope(clearEnvelope $parameters)
    {
      return $this->__soapCall('clearEnvelope', array($parameters));
    }

    /**
     * @param getUrzedyWydajaceEPrzesylki $parameters
     * @return getUrzedyWydajaceEPrzesylkiResponse
     */
    public function getUrzedyWydajaceEPrzesylki(getUrzedyWydajaceEPrzesylki $parameters)
    {
      return $this->__soapCall('getUrzedyWydajaceEPrzesylki', array($parameters));
    }

    /**
     * @param uploadIWDContent $parameters
     * @return sendEnvelopeResponseType
     */
    public function uploadIWDContent(uploadIWDContent $parameters)
    {
      return $this->__soapCall('uploadIWDContent', array($parameters));
    }

    /**
     * @param getEnvelopeStatus $parameters
     * @return getEnvelopeStatusResponse
     */
    public function getEnvelopeStatus(getEnvelopeStatus $parameters)
    {
      return $this->__soapCall('getEnvelopeStatus', array($parameters));
    }

    /**
     * @param downloadIWDContent $parameters
     * @return downloadIWDContentResponse
     */
    public function downloadIWDContent(downloadIWDContent $parameters)
    {
      return $this->__soapCall('downloadIWDContent', array($parameters));
    }

    /**
     * @param getKarty $parameters
     * @return getKartyResponse
     */
    public function getKarty(getKarty $parameters)
    {
      return $this->__soapCall('getKarty', array($parameters));
    }

    /**
     * @param getPasswordExpiredDate $parameters
     * @return getPasswordExpiredDateResponse
     */
    public function getPasswordExpiredDate(getPasswordExpiredDate $parameters)
    {
      return $this->__soapCall('getPasswordExpiredDate', array($parameters));
    }

    /**
     * @param setAktywnaKarta $parameters
     * @return setAktywnaKartaResponse
     */
    public function setAktywnaKarta(setAktywnaKarta $parameters)
    {
      return $this->__soapCall('setAktywnaKarta', array($parameters));
    }

    /**
     * @param hello $parameters
     * @return helloResponse
     */
    public function hello(hello $parameters)
    {
      return $this->__soapCall('hello', array($parameters));
    }

    /**
     * @param getEnvelopeContentShort $parameters
     * @return getEnvelopeContentShortResponse
     */
    public function getEnvelopeContentShort(getEnvelopeContentShort $parameters)
    {
      return $this->__soapCall('getEnvelopeContentShort', array($parameters));
    }

    /**
     * @param getEnvelopeContentFull $parameters
     * @return getEnvelopeContentFullResponse
     */
    public function getEnvelopeContentFull(getEnvelopeContentFull $parameters)
    {
      return $this->__soapCall('getEnvelopeContentFull', array($parameters));
    }

    /**
     * @param getAddressLabel $parameters
     * @return getAddressLabelResponse
     */
    public function getAddressLabel(getAddressLabel $parameters)
    {
      return $this->__soapCall('getAddressLabel', array($parameters));
    }

    /**
     * @param getOutboxBook $parameters
     * @return getOutboxBookResponse
     */
    public function getOutboxBook(getOutboxBook $parameters)
    {
      return $this->__soapCall('getOutboxBook', array($parameters));
    }

    /**
     * @param getFirmowaPocztaBook $parameters
     * @return getFirmowaPocztaBookResponse
     */
    public function getFirmowaPocztaBook(getFirmowaPocztaBook $parameters)
    {
      return $this->__soapCall('getFirmowaPocztaBook', array($parameters));
    }

    /**
     * @param getEnvelopeList $parameters
     * @return getEnvelopeListResponse
     */
    public function getEnvelopeList(getEnvelopeList $parameters)
    {
      return $this->__soapCall('getEnvelopeList', array($parameters));
    }

    /**
     * @param getAddresLabelByGuid $parameters
     * @return getAddresLabelByGuidResponse
     */
    public function getAddresLabelByGuid(getAddresLabelByGuid $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuid', array($parameters));
    }

    /**
     * @param getPlacowkiPocztowe $parameters
     * @return getPlacowkiPocztoweResponse
     */
    public function getPlacowkiPocztowe(getPlacowkiPocztowe $parameters)
    {
      return $this->__soapCall('getPlacowkiPocztowe', array($parameters));
    }

    /**
     * @param getGuid $parameters
     * @return getGuidResponse
     */
    public function getGuid(getGuid $parameters)
    {
      return $this->__soapCall('getGuid', array($parameters));
    }

    /**
     * @param getKierunki $parameters
     * @return getKierunkiResponse
     */
    public function getKierunki(getKierunki $parameters)
    {
      return $this->__soapCall('getKierunki', array($parameters));
    }

    /**
     * @param getKierunkiInfo $parameters
     * @return getKierunkiInfoResponse
     */
    public function getKierunkiInfo(getKierunkiInfo $parameters)
    {
      return $this->__soapCall('getKierunkiInfo', array($parameters));
    }

    /**
     * @param getEnvelopeBufor $parameters
     * @return getEnvelopeBuforResponse
     */
    public function getEnvelopeBufor(getEnvelopeBufor $parameters)
    {
      return $this->__soapCall('getEnvelopeBufor', array($parameters));
    }

    /**
     * @param clearEnvelopeByGuids $parameters
     * @return clearEnvelopeByGuidsResponse
     */
    public function clearEnvelopeByGuids(clearEnvelopeByGuids $parameters)
    {
      return $this->__soapCall('clearEnvelopeByGuids', array($parameters));
    }

    /**
     * @param setEnvelopeBuforDataNadania $parameters
     * @return setEnvelopeBuforDataNadaniaResponse
     */
    public function setEnvelopeBuforDataNadania(setEnvelopeBuforDataNadania $parameters)
    {
      return $this->__soapCall('setEnvelopeBuforDataNadania', array($parameters));
    }

    /**
     * @param getEPOStatus $parameters
     * @return getEPOStatusResponse
     */
    public function getEPOStatus(getEPOStatus $parameters)
    {
      return $this->__soapCall('getEPOStatus', array($parameters));
    }

    /**
     * @param getAddresLabelCompact $parameters
     * @return getAddresLabelCompactResponse
     */
    public function getAddresLabelCompact(getAddresLabelCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelCompact', array($parameters));
    }

    /**
     * @param getAddresLabelByGuidCompact $parameters
     * @return getAddresLabelByGuidCompactResponse
     */
    public function getAddresLabelByGuidCompact(getAddresLabelByGuidCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuidCompact', array($parameters));
    }

    /**
     * @param getEnvelopeBuforList $parameters
     * @return getEnvelopeBuforListResponse
     */
    public function getEnvelopeBuforList(getEnvelopeBuforList $parameters)
    {
      return $this->__soapCall('getEnvelopeBuforList', array($parameters));
    }

    /**
     * @param createEnvelopeBufor $parameters
     * @return createEnvelopeBuforResponse
     */
    public function createEnvelopeBufor(createEnvelopeBufor $parameters)
    {
      return $this->__soapCall('createEnvelopeBufor', array($parameters));
    }

    /**
     * @param updateEnvelopeBufor $parameters
     * @return updateEnvelopeBuforResponse
     */
    public function updateEnvelopeBufor(updateEnvelopeBufor $parameters)
    {
      return $this->__soapCall('updateEnvelopeBufor', array($parameters));
    }

    /**
     * @param moveShipments $parameters
     * @return moveShipmentsResponse
     */
    public function moveShipments(moveShipments $parameters)
    {
      return $this->__soapCall('moveShipments', array($parameters));
    }

    /**
     * @param getUbezpieczeniaInfo $parameters
     * @return getUbezpieczeniaInfoResponse
     */
    public function getUbezpieczeniaInfo(getUbezpieczeniaInfo $parameters)
    {
      return $this->__soapCall('getUbezpieczeniaInfo', array($parameters));
    }

    /**
     * @param isMiejscowa $parameters
     * @return isMiejscowaResponse
     */
    public function isMiejscowa(isMiejscowa $parameters)
    {
      return $this->__soapCall('isMiejscowa', array($parameters));
    }

    /**
     * @param getBlankietPobraniaByGuids $parameters
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function getBlankietPobraniaByGuids(getBlankietPobraniaByGuids $parameters)
    {
      return $this->__soapCall('getBlankietPobraniaByGuids', array($parameters));
    }

    /**
     * @param updateAccount $parameters
     * @return updateAccountResponse
     */
    public function updateAccount(updateAccount $parameters)
    {
      return $this->__soapCall('updateAccount', array($parameters));
    }

    /**
     * @param getAccountList $parameters
     * @return getAccountListResponse
     */
    public function getAccountList(getAccountList $parameters)
    {
      return $this->__soapCall('getAccountList', array($parameters));
    }

    /**
     * @param getProfilList $parameters
     * @return getProfilListResponse
     */
    public function getProfilList(getProfilList $parameters)
    {
      return $this->__soapCall('getProfilList', array($parameters));
    }

    /**
     * @param updateProfil $parameters
     * @return updateProfilResponse
     */
    public function updateProfil(updateProfil $parameters)
    {
      return $this->__soapCall('updateProfil', array($parameters));
    }

    /**
     * @param createAccount $parameters
     * @return createAccountResponse
     */
    public function createAccount(createAccount $parameters)
    {
      return $this->__soapCall('createAccount', array($parameters));
    }

    /**
     * @param createProfil $parameters
     * @return createProfilResponse
     */
    public function createProfil(createProfil $parameters)
    {
      return $this->__soapCall('createProfil', array($parameters));
    }

    /**
     * @param addReklamacje $parameters
     * @return addReklamacjeResponse
     */
    public function addReklamacje(addReklamacje $parameters)
    {
      return $this->__soapCall('addReklamacje', array($parameters));
    }

    /**
     * @param getReklamacje $parameters
     * @return getReklamacjeResponse
     */
    public function getReklamacje(getReklamacje $parameters)
    {
      return $this->__soapCall('getReklamacje', array($parameters));
    }

    /**
     * @param addOdwolanieDoReklamacji $parameters
     * @return addOdwolanieDoReklamacjiResponse
     */
    public function addOdwolanieDoReklamacji(addOdwolanieDoReklamacji $parameters)
    {
      return $this->__soapCall('addOdwolanieDoReklamacji', array($parameters));
    }

    /**
     * @param cancelReklamacja $parameters
     * @return cancelReklamacjaResponse
     */
    public function cancelReklamacja(cancelReklamacja $parameters)
    {
      return $this->__soapCall('cancelReklamacja', array($parameters));
    }

    /**
     * @param getZapowiedziFaktur $parameters
     * @return getZapowiedziFakturResponse
     */
    public function getZapowiedziFaktur(getZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('getZapowiedziFaktur', array($parameters));
    }

    /**
     * @param addRozbieznoscDoZapowiedziFaktur $parameters
     * @return addRozbieznoscDoZapowiedziFakturResponse
     */
    public function addRozbieznoscDoZapowiedziFaktur(addRozbieznoscDoZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('addRozbieznoscDoZapowiedziFaktur', array($parameters));
    }

    /**
     * @param getListaPowodowReklamacji $parameters
     * @return getListaPowodowReklamacjiResponse
     */
    public function getListaPowodowReklamacji(getListaPowodowReklamacji $parameters)
    {
      return $this->__soapCall('getListaPowodowReklamacji', array($parameters));
    }

    /**
     * @param zamowKuriera $parameters
     * @return zamowKurieraResponse
     */
    public function zamowKuriera(zamowKuriera $parameters)
    {
      return $this->__soapCall('zamowKuriera', array($parameters));
    }

    /**
     * @param getEZDO $parameters
     * @return getEZDOResponse
     */
    public function getEZDO(getEZDO $parameters)
    {
      return $this->__soapCall('getEZDO', array($parameters));
    }

    /**
     * @param getEZDOList $parameters
     * @return getEZDOListResponse
     */
    public function getEZDOList(getEZDOList $parameters)
    {
      return $this->__soapCall('getEZDOList', array($parameters));
    }

    /**
     * @param getWplatyCKP $parameters
     * @return getWplatyCKPResponse
     */
    public function getWplatyCKP(getWplatyCKP $parameters)
    {
      return $this->__soapCall('getWplatyCKP', array($parameters));
    }

    /**
     * @param addZalacznikDoReklamacji $parameters
     * @return addZalacznikDoReklamacjiResponse
     */
    public function addZalacznikDoReklamacji(addZalacznikDoReklamacji $parameters)
    {
      return $this->__soapCall('addZalacznikDoReklamacji', array($parameters));
    }

    /**
     * @param updateShopEZwroty $parameters
     * @return updateShopEZwrotyResponse
     */
    public function updateShopEZwroty(updateShopEZwroty $parameters)
    {
      return $this->__soapCall('updateShopEZwroty', array($parameters));
    }

    /**
     * @param getListaZgodEZwrotow $parameters
     * @return getListaZgodEZwrotowResponse
     */
    public function getListaZgodEZwrotow(getListaZgodEZwrotow $parameters)
    {
      return $this->__soapCall('getListaZgodEZwrotow', array($parameters));
    }

    /**
     * @param setStatusZgodyNaEZwrot $parameters
     * @return setStatusZgodyNaEZwrotResponse
     */
    public function setStatusZgodyNaEZwrot(setStatusZgodyNaEZwrot $parameters)
    {
      return $this->__soapCall('setStatusZgodyNaEZwrot', array($parameters));
    }

    /**
     * @param wyslijLinkaOStatusieEZwrotu $parameters
     * @return wyslijLinkaOStatusieEZwrotuResponse
     */
    public function wyslijLinkaOStatusieEZwrotu(wyslijLinkaOStatusieEZwrotu $parameters)
    {
      return $this->__soapCall('wyslijLinkaOStatusieEZwrotu', array($parameters));
    }

    /**
     * @param isObszarMiasto $parameters
     * @return isObszarMiastoResponse
     */
    public function isObszarMiasto(isObszarMiasto $parameters)
    {
      return $this->__soapCall('isObszarMiasto', array($parameters));
    }

    /**
     * @param getPaczkaKorzysciInfo $parameters
     * @return getPaczkaKorzysciInfoResponse
     */
    public function getPaczkaKorzysciInfo(getPaczkaKorzysciInfo $parameters)
    {
      return $this->__soapCall('getPaczkaKorzysciInfo', array($parameters));
    }

    /**
     * @param setJednostkaOrganizacyjna $parameters
     * @return setJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna(setJednostkaOrganizacyjna $parameters)
    {
      return $this->__soapCall('setJednostkaOrganizacyjna', array($parameters));
    }

    /**
     * @param getJednostkaOrganizacyjna $parameters
     * @return getJednostkaOrganizacyjnaResponse
     */
    public function getJednostkaOrganizacyjna(getJednostkaOrganizacyjna $parameters)
    {
      return $this->__soapCall('getJednostkaOrganizacyjna', array($parameters));
    }

}
