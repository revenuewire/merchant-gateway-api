<?php
/**
 * Currency
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant Gateway API
 *
 * Merchant Gateway API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Currency Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Currency {
    const AFN = 'AFN';
    const DZD = 'DZD';
    const AOA = 'AOA';
    const AON = 'AON';
    const ANG = 'ANG';
    const AWG = 'AWG';
    const AUD = 'AUD';
    const ATS = 'ATS';
    const AZN = 'AZN';
    const BSD = 'BSD';
    const BHD = 'BHD';
    const BDT = 'BDT';
    const BBD = 'BBD';
    const BYN = 'BYN';
    const BEF = 'BEF';
    const BZD = 'BZD';
    const BMD = 'BMD';
    const BTN = 'BTN';
    const BOB = 'BOB';
    const BAM = 'BAM';
    const BWP = 'BWP';
    const BRL = 'BRL';
    const BND = 'BND';
    const BGL = 'BGL';
    const BIF = 'BIF';
    const KHR = 'KHR';
    const CAD = 'CAD';
    const CVE = 'CVE';
    const KYD = 'KYD';
    const XOF = 'XOF';
    const XAF = 'XAF';
    const XPF = 'XPF';
    const CLP = 'CLP';
    const COP = 'COP';
    const KMF = 'KMF';
    const CDF = 'CDF';
    const CRC = 'CRC';
    const HRK = 'HRK';
    const CYP = 'CYP';
    const CZK = 'CZK';
    const DKK = 'DKK';
    const DEM = 'DEM';
    const DJF = 'DJF';
    const STD = 'STD';
    const DOP = 'DOP';
    const NLG = 'NLG';
    const XCD = 'XCD';
    const ECS = 'ECS';
    const EGP = 'EGP';
    const SVC = 'SVC';
    const ERN = 'ERN';
    const EEK = 'EEK';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const FKP = 'FKP';
    const FJD = 'FJD';
    const FIM = 'FIM';
    const FRF = 'FRF';
    const GMD = 'GMD';
    const GEL = 'GEL';
    const GHS = 'GHS';
    const GIP = 'GIP';
    const GRD = 'GRD';
    const GTQ = 'GTQ';
    const GNF = 'GNF';
    const GYD = 'GYD';
    const HTG = 'HTG';
    const HNL = 'HNL';
    const HKD = 'HKD';
    const HUF = 'HUF';
    const ISK = 'ISK';
    const INR = 'INR';
    const IDR = 'IDR';
    const IRR = 'IRR';
    const IQD = 'IQD';
    const IEP = 'IEP';
    const ITL = 'ITL';
    const JMD = 'JMD';
    const JPY = 'JPY';
    const JOD = 'JOD';
    const KZT = 'KZT';
    const KES = 'KES';
    const KWD = 'KWD';
    const LAK = 'LAK';
    const LVL = 'LVL';
    const LBP = 'LBP';
    const LSL = 'LSL';
    const LRD = 'LRD';
    const LYD = 'LYD';
    const LTL = 'LTL';
    const LUF = 'LUF';
    const MOP = 'MOP';
    const MKD = 'MKD';
    const MGA = 'MGA';
    const MGF = 'MGF';
    const MWK = 'MWK';
    const MYR = 'MYR';
    const MVR = 'MVR';
    const MTL = 'MTL';
    const MRO = 'MRO';
    const MUR = 'MUR';
    const MXN = 'MXN';
    const MDL = 'MDL';
    const MNT = 'MNT';
    const MAD = 'MAD';
    const MZN = 'MZN';
    const MMK = 'MMK';
    const NAD = 'NAD';
    const NPR = 'NPR';
    const BGN = 'BGN';
    const ILS = 'ILS';
    const PLN = 'PLN';
    const RON = 'RON';
    const RSD = 'RSD';
    const TWD = 'TWD';
    const TRY = 'TRY';
    const NZD = 'NZD';
    const NIO = 'NIO';
    const NGN = 'NGN';
    const KPW = 'KPW';
    const NOK = 'NOK';
    const ARS = 'ARS';
    const PKR = 'PKR';
    const PAB = 'PAB';
    const PGK = 'PGK';
    const PYG = 'PYG';
    const PEN = 'PEN';
    const UYU = 'UYU';
    const PHP = 'PHP';
    const PTE = 'PTE';
    const GBP = 'GBP';
    const QAR = 'QAR';
    const OMR = 'OMR';
    const ROL = 'ROL';
    const RUB = 'RUB';
    const RWF = 'RWF';
    const WST = 'WST';
    const SAR = 'SAR';
    const CSD = 'CSD';
    const SCR = 'SCR';
    const SLL = 'SLL';
    const SGD = 'SGD';
    const SKK = 'SKK';
    const SIT = 'SIT';
    const SBD = 'SBD';
    const SOS = 'SOS';
    const ZAR = 'ZAR';
    const KRW = 'KRW';
    const ESP = 'ESP';
    const LKR = 'LKR';
    const SHP = 'SHP';
    const SDP = 'SDP';
    const SRD = 'SRD';
    const SRG = 'SRG';
    const SZL = 'SZL';
    const SEK = 'SEK';
    const CHF = 'CHF';
    const SYP = 'SYP';
    const TJS = 'TJS';
    const TZS = 'TZS';
    const THB = 'THB';
    const TOP = 'TOP';
    const TTD = 'TTD';
    const TND = 'TND';
    const TRL = 'TRL';
    const TMT = 'TMT';
    const AED = 'AED';
    const UGX = 'UGX';
    const UAH = 'UAH';
    const USD = 'USD';
    const UZS = 'UZS';
    const VUV = 'VUV';
    const VEB = 'VEB';
    const VEF = 'VEF';
    const VND = 'VND';
    const YER = 'YER';
    const CNY = 'CNY';
    const YUM = 'YUM';
    const ZMW = 'ZMW';
    const ZWD = 'ZWD';
    

    
}

