<?php

namespace App\ObjectTools;

class XmlParamHandler extends ParamHandler
{
    /**
     * @throws \DOMException
     */
    public function write(): void
    {
        $xml = new \DOMDocument('1.0', 'utf-8');
        $xml_album = $xml->createElement('Album');
        foreach ($this->params as $key => $value) {
            $xml_track = $xml->createElement($key);
            $xml_track->nodeValue = $value;
            $xml_album->appendChild($xml_track);
        }

        $xml->appendChild($xml_album);

        $xml->save($this->source);
    }

    public function read(): void
    {
        $xmlDoc = new \DOMDocument();
        $xmlDoc->load($this->source);

        echo $xmlDoc->saveXML();
    }
}
