<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace de\prolope\geoHelper\geometry;


class Point extends Geometry {

    protected $x;
    protected $y;
    protected $z;
    protected $m;

    public function __get( $name ){
        switch( $name ){
            case 'x':
                return $this->x;
                break;
            case 'y':
                return $this->y;
                break;
            case 'z':
                return $this->z;
                break;
            case 'm':
                return $this->m;
                break;
        }
    }

    public function __set( $name , $value ){
        switch( $name ){
            case 'x':
                return $this->x = $value;
                break;
            case 'y':
                return $this->y = $value;
                break;
            case 'z':
                return $this->z = $value;
                break;
            case 'm':
                return $this->m = $value;
                break;
        }
    }

    public function dimension( ){
        if( $this->z !== null ){
            return 3;
        } else {
            return 2;
        }
    }
}
