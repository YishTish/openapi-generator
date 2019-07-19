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
	"encoding/json"
)

type HasOnlyReadOnly struct {
	Bar *string `json:"bar,omitempty"`

	Foo *string `json:"foo,omitempty"`

}

// GetBar returns the Bar field if non-nil, zero value otherwise.
func (o *HasOnlyReadOnly) GetBar() string {
	if o == nil || o.Bar == nil {
		var ret string
		return ret
	}
	return *o.Bar
}

// GetBarOk returns a tuple with the Bar field if it's non-nil, zero value otherwise
// and a boolean to check if the value has been set.
func (o *HasOnlyReadOnly) GetBarOk() (string, bool) {
	if o == nil || o.Bar == nil {
		var ret string
		return ret, false
	}
	return *o.Bar, true
}

// HasBar returns a boolean if a field has been set.
func (o *HasOnlyReadOnly) HasBar() bool {
	if o != nil && o.Bar != nil {
		return true
	}

	return false
}

// SetBar gets a reference to the given string and assigns it to the Bar field.
func (o *HasOnlyReadOnly) SetBar(v string) {
	o.Bar = &v
}

// GetFoo returns the Foo field if non-nil, zero value otherwise.
func (o *HasOnlyReadOnly) GetFoo() string {
	if o == nil || o.Foo == nil {
		var ret string
		return ret
	}
	return *o.Foo
}

// GetFooOk returns a tuple with the Foo field if it's non-nil, zero value otherwise
// and a boolean to check if the value has been set.
func (o *HasOnlyReadOnly) GetFooOk() (string, bool) {
	if o == nil || o.Foo == nil {
		var ret string
		return ret, false
	}
	return *o.Foo, true
}

// HasFoo returns a boolean if a field has been set.
func (o *HasOnlyReadOnly) HasFoo() bool {
	if o != nil && o.Foo != nil {
		return true
	}

	return false
}

// SetFoo gets a reference to the given string and assigns it to the Foo field.
func (o *HasOnlyReadOnly) SetFoo(v string) {
	o.Foo = &v
}


func (o HasOnlyReadOnly) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if o.Bar != nil {
		toSerialize["bar"] = o.Bar
	}
	if o.Foo != nil {
		toSerialize["foo"] = o.Foo
	}
	return json.Marshal(toSerialize)
}


