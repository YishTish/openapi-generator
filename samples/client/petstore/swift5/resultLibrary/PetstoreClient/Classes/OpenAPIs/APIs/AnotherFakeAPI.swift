//
// AnotherFakeAPI.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation



open class AnotherFakeAPI {
    /**
     To test special tags
     
     - parameter body: (body) client model 
     - parameter apiResponseQueue: The queue on which api response is dispatched.
     - parameter completion: completion handler to receive the result
     */
    open class func call123testSpecialTags(body: Client, apiResponseQueue: DispatchQueue = PetstoreClientAPI.apiResponseQueue, completion: @escaping ((_ result: Swift.Result<Client, Error>) -> Void)) {
        call123testSpecialTagsWithRequestBuilder(body: body).execute(apiResponseQueue) { result -> Void in
            switch result {
            case let .success(response):
                completion(.success(response.body!))
            case let .failure(error):
                completion(.failure(error))
            }
        }
    }

    /**
     To test special tags
     - PATCH /another-fake/dummy
     - To test special tags and operation ID starting with number
     - parameter body: (body) client model 
     - returns: RequestBuilder<Client> 
     */
    open class func call123testSpecialTagsWithRequestBuilder(body: Client) -> RequestBuilder<Client> {
        let path = "/another-fake/dummy"
        let URLString = PetstoreClientAPI.basePath + path
        let parameters = JSONEncodingHelper.encodingParameters(forEncodableObject: body)

        let url = URLComponents(string: URLString)

        let requestBuilder: RequestBuilder<Client>.Type = PetstoreClientAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "PATCH", URLString: (url?.string ?? URLString), parameters: parameters, isBody: true)
    }

}
