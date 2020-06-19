/**
* OpenAPI Petstore
* This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
*
* The version of the OpenAPI document: 1.0.0
* 
*
* NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
* https://openapi-generator.tech
* Do not edit the class manually.
*/
package org.openapitools.client.models


import com.google.gson.annotations.SerializedName
import java.io.Serializable

/**
 * Just a string to inform instance is up and running. Make it nullable in hope to get it as pointer in generated model.
 * @param nullableMessage 
 */

data class HealthCheckResult (
    @SerializedName("NullableMessage")
    val nullableMessage: kotlin.String? = null
) : Serializable {
    companion object {
        private const val serialVersionUID: Long = 123
    }

}

