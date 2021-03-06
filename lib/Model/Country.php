<?php
/**
 * Country
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
 * OpenAPI spec version: 1.2.6
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
 * Country Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Country {
    const AF = 'AF';
    const LI = 'LI';
    const AX = 'AX';
    const LT = 'LT';
    const AL = 'AL';
    const LU = 'LU';
    const DZ = 'DZ';
    const MO = 'MO';
    const AS = 'AS';
    const MK = 'MK';
    const AD = 'AD';
    const MG = 'MG';
    const AO = 'AO';
    const MW = 'MW';
    const AI = 'AI';
    const MY = 'MY';
    const AQ = 'AQ';
    const MV = 'MV';
    const AG = 'AG';
    const ML = 'ML';
    const AR = 'AR';
    const MT = 'MT';
    const AM = 'AM';
    const MH = 'MH';
    const AW = 'AW';
    const MQ = 'MQ';
    const AU = 'AU';
    const MR = 'MR';
    const AT = 'AT';
    const MU = 'MU';
    const AZ = 'AZ';
    const YT = 'YT';
    const BS = 'BS';
    const MX = 'MX';
    const BH = 'BH';
    const FM = 'FM';
    const BD = 'BD';
    const MD = 'MD';
    const BB = 'BB';
    const MC = 'MC';
    const BY = 'BY';
    const MN = 'MN';
    const BE = 'BE';
    const MS = 'MS';
    const BZ = 'BZ';
    const MA = 'MA';
    const BJ = 'BJ';
    const MZ = 'MZ';
    const BM = 'BM';
    const MM = 'MM';
    const BT = 'BT';
    const NA = 'NA';
    const BO = 'BO';
    const NR = 'NR';
    const BQ = 'BQ';
    const NP = 'NP';
    const BA = 'BA';
    const NL = 'NL';
    const BW = 'BW';
    const NC = 'NC';
    const BV = 'BV';
    const NZ = 'NZ';
    const BR = 'BR';
    const NI = 'NI';
    const IO = 'IO';
    const NE = 'NE';
    const BN = 'BN';
    const NG = 'NG';
    const BG = 'BG';
    const NU = 'NU';
    const BF = 'BF';
    const NF = 'NF';
    const BI = 'BI';
    const MP = 'MP';
    const KH = 'KH';
    const NO = 'NO';
    const CM = 'CM';
    const OM = 'OM';
    const CA = 'CA';
    const PK = 'PK';
    const CV = 'CV';
    const PW = 'PW';
    const KY = 'KY';
    const PS = 'PS';
    const CF = 'CF';
    const PA = 'PA';
    const TD = 'TD';
    const PG = 'PG';
    const CL = 'CL';
    const PY = 'PY';
    const CN = 'CN';
    const KP = 'KP';
    const CX = 'CX';
    const PE = 'PE';
    const CC = 'CC';
    const PH = 'PH';
    const CO = 'CO';
    const PN = 'PN';
    const KM = 'KM';
    const PL = 'PL';
    const CG = 'CG';
    const PT = 'PT';
    const CD = 'CD';
    const PR = 'PR';
    const CK = 'CK';
    const QA = 'QA';
    const CR = 'CR';
    const KR = 'KR';
    const CI = 'CI';
    const ME = 'ME';
    const HR = 'HR';
    const RS = 'RS';
    const CU = 'CU';
    const RE = 'RE';
    const CW = 'CW';
    const RO = 'RO';
    const CY = 'CY';
    const RU = 'RU';
    const CZ = 'CZ';
    const RW = 'RW';
    const DK = 'DK';
    const GS = 'GS';
    const DJ = 'DJ';
    const BL = 'BL';
    const DM = 'DM';
    const KN = 'KN';
    const DO = 'DO';
    const LC = 'LC';
    const TP = 'TP';
    const MF = 'MF';
    const EC = 'EC';
    const WS = 'WS';
    const EG = 'EG';
    const SM = 'SM';
    const SV = 'SV';
    const ST = 'ST';
    const GQ = 'GQ';
    const SA = 'SA';
    const ER = 'ER';
    const SN = 'SN';
    const EE = 'EE';
    const CS = 'CS';
    const ET = 'ET';
    const SC = 'SC';
    const FK = 'FK';
    const SL = 'SL';
    const FO = 'FO';
    const SG = 'SG';
    const FJ = 'FJ';
    const SX = 'SX';
    const FI = 'FI';
    const SK = 'SK';
    const FR = 'FR';
    const SI = 'SI';
    const FX = 'FX';
    const SB = 'SB';
    const GF = 'GF';
    const SO = 'SO';
    const PF = 'PF';
    const ZA = 'ZA';
    const TF = 'TF';
    const ES = 'ES';
    const GA = 'GA';
    const LK = 'LK';
    const GM = 'GM';
    const SH = 'SH';
    const GE = 'GE';
    const PM = 'PM';
    const DE = 'DE';
    const VC = 'VC';
    const GH = 'GH';
    const SD = 'SD';
    const GI = 'GI';
    const SR = 'SR';
    const GR = 'GR';
    const SJ = 'SJ';
    const GL = 'GL';
    const SZ = 'SZ';
    const GD = 'GD';
    const SE = 'SE';
    const GP = 'GP';
    const CH = 'CH';
    const GU = 'GU';
    const SY = 'SY';
    const GT = 'GT';
    const TW = 'TW';
    const GG = 'GG';
    const TJ = 'TJ';
    const GN = 'GN';
    const TZ = 'TZ';
    const GW = 'GW';
    const TH = 'TH';
    const GY = 'GY';
    const TL = 'TL';
    const HT = 'HT';
    const TG = 'TG';
    const HM = 'HM';
    const TK = 'TK';
    const HN = 'HN';
    const TO = 'TO';
    const HK = 'HK';
    const TT = 'TT';
    const HU = 'HU';
    const TN = 'TN';
    const IS = 'IS';
    const TR = 'TR';
    const IN = 'IN';
    const TM = 'TM';
    const ID = 'ID';
    const TC = 'TC';
    const IR = 'IR';
    const TV = 'TV';
    const IQ = 'IQ';
    const UG = 'UG';
    const IE = 'IE';
    const UA = 'UA';
    const IM = 'IM';
    const AE = 'AE';
    const IL = 'IL';
    const GB = 'GB';
    const IT = 'IT';
    const US = 'US';
    const JM = 'JM';
    const UY = 'UY';
    const JP = 'JP';
    const UM = 'UM';
    const JE = 'JE';
    const UZ = 'UZ';
    const JO = 'JO';
    const VU = 'VU';
    const KZ = 'KZ';
    const VA = 'VA';
    const KE = 'KE';
    const VE = 'VE';
    const KI = 'KI';
    const VN = 'VN';
    const KS = 'KS';
    const VG = 'VG';
    const KW = 'KW';
    const VI = 'VI';
    const KG = 'KG';
    const WF = 'WF';
    const LA = 'LA';
    const EH = 'EH';
    const LV = 'LV';
    const YE = 'YE';
    const LB = 'LB';
    const YU = 'YU';
    const LS = 'LS';
    const ZR = 'ZR';
    const LR = 'LR';
    const ZM = 'ZM';
    const LY = 'LY';
    const ZW = 'ZW';
    

    
}

