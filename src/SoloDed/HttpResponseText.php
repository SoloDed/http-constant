<?php

namespace SoloDed;

class HttpResponseText
{
    //1xx informational responses
    const HTTP_CONTINUE = "Continue";
    const HTTP_SWITCHING_PROTOCOLS = "Switching Protocol";
    const HTTP_PROCESSING = "Processing";
    const HTTP_EARLY_HINTS = "Early Hints";
    //2xx successful responses
    const HTTP_OK = "OK";
    const HTTP_CREATED = "Created";
    const HTTP_ACCEPTED = "Accepted";
    const HTTP_NON_AUTHORITATIVE_INFORMATION = "Non-Authoritative Information";
    const HTTP_NO_CONTENT = "No Content";
    const HTTP_RESET_CONTENT = "Reset Content";
    const HTTP_PARTIAL_CONTENT = "Partial Content";
    const HTTP_MULTI_STATUS = "Multi-Status";
    const HTTP_ALREADY_REPORTED = "Already Reported";
    const HTTP_IM_USED = "IM Used";
    //3xx redirection messages
    const HTTP_MULTIPLE_CHOICE = "Multiple Choices";
    const HTTP_MOVED_PERMANENTLY = "Moved Permanently";
    const HTTP_FOUND = "Found";
    const HTTP_SEE_OTHER = "See Other";
    const HTTP_NOT_MODIFIED = "Not Modified";
    const HTTP_USE_PROXY = "Use Proxy";
    const HTTP_UNUSED = "Unused";
    const HTTP_TEMPORARY_REDIRECT= "Temporary Redirect";
    const HTTP_PERMANENT_REDIRECT = "Permanent Redirect";
    //4xx client error responses
    const HTTP_BAD_REQUEST = "Bad Request";
    const HTTP_UNAUTHORIZED = "Unauthorized";
    const HTTP_PAYMENT_REQUIRED = "Payment Required";
    const HTTP_FORBIDDEN = "Forbidden";
    const HTTP_NOT_FOUND = "Not Found";
    const HTTP_METHOD_NOT_ALLOWED = "Method Not Allowed";
    const HTTP_NOT_ACCEPTABLE = "Not Acceptable";
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = "Proxy Authentication Required";
    const HTTP_REQUEST_TIMEOUT = "Request Timeout";
    const HTTP_CONFLICT = "Conflict";
    const HTTP_GONE = "Gone";
    const HTTP_LENGTH_REQUIRED = "Length Required";
    const HTTP_PRECONDITION_FAILED = "Precondition Failed";
    const HTTP_PAYLOAD_TOO_LARGE = "Payload Too Large";
    const HTTP_URI_TOO_LONG = "URI Too Long";
    const HTTP_UNSUPPORTED_MEDIA_TYPE = "Unsupported Media Type";
    const HTTP_RANGE_NOT_SATISFIABLE = "Range Not Satisfiable";
    const HTTP_EXPECTATION_FAILED = "Expectation Failed";
    const HTTP_IM_A_TEAPOT = "I'm a teapot";
    const HTTP_MISDIRECTED_REQUEST = "Misdirected Request";
    const HTTP_UNPROCESSABLE_ENTITY = "Unprocessable Entity";
    const HTTP_LOCKED = "Locked";
    const HTTP_FAILED_DEPENDENCY = "Failed Dependency";
    const HTTP_TOO_EARLY = "Too Early";
    const HTTP_UPGRADE_REQUIRED = "Upgrade Required";
    const HTTP_PRECONDITION_REQUIRED = "Precondition Required";
    const HTTP_TOO_MANY_REQUESTS = "Too Many Requests";
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = "Request Header Fields Too Large";
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = "Unavailable For Legal Reasons";
    //5xx server error responses
    const HTTP_INTERNAL_SERVER_ERROR = "Internal Server Error";
    const HTTP_NOT_IMPLEMENTED = "Not Implemented";
    const HTTP_BAD_GATEWAY = "Bad Gateway";
    const HTTP_SERVICE_UNAVAILABLE = "Service Unavailable";
    const HTTP_GATEWAY_TIMEOUT = "Gateway Timeout";
    const HTTP_HTTP_VERSION_NOT_SUPPORTED = "HTTP Version Not Supported";
    const HTTP_VARIANT_ALSO_NEGOTIATES = "Variant Also Negotiates";
    const HTTP_INSUFFICIENT_STORAGE = "Insufficient Storage";
    const HTTP_LOOP_DETECTED = "Loop Detected";
    const HTTP_NOT_EXTENDED = "Not Extended";
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = "Network Authentication Required";
}
