<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Api;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpNotImplementedException;

/**
 * AbstractUserApi Class Doc Comment
 *
 * @package OpenAPIServer\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractUserApi
{

    /**
     * @var ContainerInterface|null Slim app container instance
     */
    protected $container;

    /**
     * Route Controller constructor receives container
     *
     * @param ContainerInterface|null $container Slim app container instance
     */
    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    /**
     * POST createUser
     * Summary: Create user
     * Notes: This can only be done by the logged in user.
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function createUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUser as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST createUsersWithArrayInput
     * Summary: Creates list of users with given input array
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function createUsersWithArrayInput(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUsersWithArrayInput as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST createUsersWithListInput
     * Summary: Creates list of users with given input array
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function createUsersWithListInput(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUsersWithListInput as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE deleteUser
     * Summary: Delete user
     * Notes: This can only be done by the logged in user.
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deleteUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $username = $args['username'];
        $message = "How about implementing deleteUser as a DELETE method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getUserByName
     * Summary: Get user by user name
     * Output-Formats: [application/xml, application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getUserByName(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $username = $args['username'];
        $message = "How about implementing getUserByName as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET loginUser
     * Summary: Logs user into the system
     * Output-Formats: [application/xml, application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function loginUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $queryParams = $request->getQueryParams();
        $username = (key_exists('username', $queryParams)) ? $queryParams['username'] : null;
        $password = (key_exists('password', $queryParams)) ? $queryParams['password'] : null;
        $message = "How about implementing loginUser as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET logoutUser
     * Summary: Logs out current logged in user session
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function logoutUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $message = "How about implementing logoutUser as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateUser
     * Summary: Updated user
     * Notes: This can only be done by the logged in user.
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $username = $args['username'];
        $body = $request->getParsedBody();
        $message = "How about implementing updateUser as a PUT method in OpenAPIServer\Api\UserApi class?";
        throw new HttpNotImplementedException($request, $message);
    }
}
