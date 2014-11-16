<?php

namespace HacContent;

class XmlRetriever {

    public function retrieve($filename) {
        return simplexml_load_file('pages/'.$filename.'xml');
    }

}