<?php

namespace HacContent;

class XmlRetriever {

    public static function retrieve($filename) {
        return simplexml_load_file('pages/'.$filename.'xml');
    }

}