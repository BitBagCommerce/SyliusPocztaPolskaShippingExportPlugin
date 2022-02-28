@managing_shipping_gateway_poczta_polska
Feature: Creating shipping gateway
    In order to export shipping data to external shipping provider service
    As an Administrator
    I want to be able to add new shipping gateway with shipping method

    Background:
        Given the store operates on a single channel in "United States"
        And I am logged in as an administrator
        And the store has "PocztaPolska Express" shipping method with "$10.00" fee

    @ui
    Scenario: Creating PocztaPolska Express shipping gateway
        When I visit the create shipping gateway configuration page for "poczta_polska"
        And I select the "PocztaPolska Express" shipping method
        And I fill the "WSDL" field with "https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl"
        And I fill the "Username" field with "123"
        And I fill the "Password" field with "123"
        And I fill the "Client number" field with "1204663"
        And I fill the "Name (first and last name or company name)" field with "Ja"
        And I fill the "Postal Code" field with "00001"
        And I fill the "City" field with "Wawa"
        And I fill the "Address" field with "Leśna 7"
        And I fill the "Phone number" field with "123456789"
        And I fill the "Shipment start hour" field with "12:00"
        And I fill the "Shipment end hour" field with "15:00"
        And I fill the "Pickup breaking hour" field with "15:00"
        And I fill the "Package width" field with "40"
        And I fill the "Package height" field with "30"
        And I fill the "Package length" field with "20"
        And I fill the "COD payment method code" field with "stripe_checkout"
        And I fill the "Determine the payment page" select option with "Sender"
        And I fill the "Payment method" select option with "Bank transfer"
        And I fill the "Type of request" select option with "Order courier"
        And I fill the "Type of transport service" select option with "Domestic shipment"
        And I add it
        Then I should be notified that the shipping gateway has been created
