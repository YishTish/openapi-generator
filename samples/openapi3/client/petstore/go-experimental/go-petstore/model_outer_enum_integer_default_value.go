/*
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * API version: 1.0.0
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package petstore

import (
	"bytes"
	"encoding/json"
)

// OuterEnumIntegerDefaultValue the model 'OuterEnumIntegerDefaultValue'
type OuterEnumIntegerDefaultValue int32

// List of OuterEnumIntegerDefaultValue
const (
	OUTERENUMINTEGERDEFAULTVALUE__0 OuterEnumIntegerDefaultValue = 0
	OUTERENUMINTEGERDEFAULTVALUE__1 OuterEnumIntegerDefaultValue = 1
	OUTERENUMINTEGERDEFAULTVALUE__2 OuterEnumIntegerDefaultValue = 2
)

// Ptr returns reference to OuterEnumIntegerDefaultValue value
func (v OuterEnumIntegerDefaultValue) Ptr() *OuterEnumIntegerDefaultValue {
	return &v
}


type NullableOuterEnumIntegerDefaultValue struct {
	Value OuterEnumIntegerDefaultValue
	ExplicitNull bool
}

func (v NullableOuterEnumIntegerDefaultValue) MarshalJSON() ([]byte, error) {
    switch {
    case v.ExplicitNull:
        return []byte("null"), nil
    default:
		return json.Marshal(v.Value)
	}
}

func (v *NullableOuterEnumIntegerDefaultValue) UnmarshalJSON(src []byte) error {
	if bytes.Equal(src, []byte("null")) {
		v.ExplicitNull = true
		return nil
	}

	return json.Unmarshal(src, &v.Value)
}
