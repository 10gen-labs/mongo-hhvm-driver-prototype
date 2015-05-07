/**
 *  Copyright 2015 MongoDB, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

#include "hphp/runtime/base/base-includes.h"

extern "C" {
#include "libbson/src/bson/bson.h"
#include "libmongoc/src/mongoc/mongoc.h"
}

namespace MongoDriver {

class Utils
{
	private:
		static HPHP::ObjectData *CreateAndConstruct(const HPHP::StaticString classname, const HPHP::Variant &message, const HPHP::Variant &code);

	public:
		static bool splitNamespace(HPHP::String ns, char **db, char **col);
		static HPHP::Object throwExceptionFromBsonError(bson_error_t *error);
};

}
