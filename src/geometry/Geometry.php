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


abstract class Geometry {
//simple
	abstract public function dimension();
	public function coordinateDimension() {}
	public function spatialDimension() {}
	public function geometryType() {}

	/**
	 * at the moment only 4326 (WGS84) is supported
	 *
	 * @return integer
	 */
	public function SRID() { return 4326; }
	public function envelope() {}
	public function asText() {}
	public function asBinary () {}
	public function isEmpty () {}
	public function isSimple() {}
	public function is3D() {}
	public function isMeasured() {}
	public function boundary () {}
//query
	public function equals(Geometry $another ) {}
	public function disjoint(Geometry $another ) {}
	public function intersects(Geometry $another ) {}
	public function touches(Geometry $another ) {}
	public function crosses(Geometry $another ) {}
	public function within(Geometry $another ) {}
	public function contains(Geometry $another ) {}
	public function overlaps(Geometry $another ) {}
	public function relate(Geometry $another , $strMatrix) {}
	public function locateAlong($mValue) {}
	public function locateBetween($mStart, $mEnd) {}
//analysis
	public function distance(Geometry $another ) {}
	public function buffer($distance) {}
	public function convexHull() {}
	public function intersection(Geometry $another ) {}
	public function union(Geometry $another ) {}
	public function difference(Geometry $another ) {}
	public function symDifference(Geometry $another ) {}

}
