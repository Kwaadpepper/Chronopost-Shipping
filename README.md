# Chronopost PHP Soap generated Lib
Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl

    wsdltophp generate:package \
        --urlorpath="https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl" \
        --destination="." \
        --composer-name="kwaadpepper/chronopost-wsdl" \
        --force