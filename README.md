# Chronopost Shipping PHP Soap generated Lib

LES SERVICES DE GENERATION D’ETIQUETTE (ShippingService)

Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl

    wsdltophp generate:package \
        --urlorpath="https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl" \
        --destination="." \
        --composer-name="kwaadpepper/chronopost-wsdl" \
        --force