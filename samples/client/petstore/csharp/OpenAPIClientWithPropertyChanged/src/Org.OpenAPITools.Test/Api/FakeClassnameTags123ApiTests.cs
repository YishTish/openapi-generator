/* 
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.IO;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Reflection;
using RestSharp;
using NUnit.Framework;

using Org.OpenAPITools.Client;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Model;

namespace Org.OpenAPITools.Test
{
    /// <summary>
    ///  Class for testing FakeClassnameTags123Api
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by OpenAPI Generator (https://openapi-generator.tech).
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    public class FakeClassnameTags123ApiTests
    {
        private FakeClassnameTags123Api instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new FakeClassnameTags123Api();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of FakeClassnameTags123Api
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            // TODO uncomment below to test 'IsInstanceOf' FakeClassnameTags123Api
            //Assert.IsInstanceOf(typeof(FakeClassnameTags123Api), instance);
        }

        
        /// <summary>
        /// Test TestClassname
        /// </summary>
        [Test]
        public void TestClassnameTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //ModelClient body = null;
            //var response = instance.TestClassname(body);
            //Assert.IsInstanceOf(typeof(ModelClient), response, "response is ModelClient");
        }
        
    }

}
