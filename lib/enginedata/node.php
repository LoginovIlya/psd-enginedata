<?php

class Node{

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}


// # -*- encoding : utf-8 -*-
// class PSD
//   class EngineData
//     # Represents a single node in the parsing tree. Extended with Hashie methods
//     # to make data access easier.
//     class Node < Hash
//       include Hashie::Extensions::MergeInitializer
//       include Hashie::Extensions::MethodAccess
//     end
//   end
// end
