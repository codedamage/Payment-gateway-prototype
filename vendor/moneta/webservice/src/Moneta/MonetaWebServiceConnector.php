<?php
/**
 * Class was generated by WSDL2PHP tool
 *
 * PHP version 5
 *
 * @category Tools
 * @package  WSDL
 * @author   Andrey Filippov <afi.work@gmail.com>
 * @license  %license%
 * @link     https://solo-framework-lib.googlecode.com
 */

namespace Moneta;

/*REQUIRE_DATATYPES*/

class MonetaWebServiceConnector
{
	/**
	 * Mapping PHP classes and types from a WSDL
	 * Key - type defined in WSDL, value - PHP class name
	 * To avoid conflicts with another classes we have to add prefix for generated data types
	 */
	//private static $classmap = array(/*CLASSMAP*/);

	/**
	 * SoapClient instance
	 *
	 * @var \SoapClient
	 */
	protected $client = null;

	/**
	 * An array of headers to be sent along with the SOAP request
	 *
	 * @var array
	 */
	protected $inputHeaders = null;

	/**
	 * If supplied, this array will be filled with the headers from the SOAP response
	 *
	 * @var array
	 */
	protected $outputHeaders = null;


	/**
	 * Constructor
	 *
	 * @param string $wsdl Path or URL to WSDL file
	 * @param array $options Options like SoapClient->__construct()
	 *
	 * @return \WebServiceConnector
	 */
	function __construct($wsdl, $options = null)
	{
//		foreach(self::$classmap as $key => $value)
//			if(!isset($options["classmap"][$key]))
//				$options["classmap"][$key] = $value;

		if($options === null)
			$options = array();

		$this->client = new \SoapClient($wsdl, $options);
	}

	// Block of generated methods
	
	/**
	 * 
	 *
	 * @param \Moneta\Types\InvoiceRequest $request
	 *
	 * @return \Moneta\Types\InvoiceResponse
	 */
	public function Invoice(\Moneta\Types\InvoiceRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\PaymentSystemInfoRequest $request
	 *
	 * @return \Moneta\Types\PaymentSystemInfoResponse
	 */
	public function PaymentSystemInfo(\Moneta\Types\PaymentSystemInfoRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\InvoiceBatchRequest $request
	 *
	 * @return \Moneta\Types\InvoiceBatchResponse
	 */
	public function InvoiceBatch(\Moneta\Types\InvoiceBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\TransferRequest $request
	 *
	 * @return \Moneta\Types\TransferResponse
	 */
	public function Transfer(\Moneta\Types\TransferRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\TransferBatchRequest $request
	 *
	 * @return \Moneta\Types\TransferBatchResponse
	 */
	public function TransferBatch(\Moneta\Types\TransferBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\PaymentRequest $request
	 *
	 * @return \Moneta\Types\PaymentResponse
	 */
	public function Payment(\Moneta\Types\PaymentRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\PaymentBatchRequest $request
	 *
	 * @return \Moneta\Types\PaymentBatchResponse
	 */
	public function PaymentBatch(\Moneta\Types\PaymentBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\AuthoriseTransactionRequest $request
	 *
	 * @return \Moneta\Types\AuthoriseTransactionResponse
	 */
	public function AuthoriseTransaction(\Moneta\Types\AuthoriseTransactionRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\AuthoriseTransactionBatchRequest $request
	 *
	 * @return \Moneta\Types\AuthoriseTransactionBatchResponse
	 */
	public function AuthoriseTransactionBatch(\Moneta\Types\AuthoriseTransactionBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ConfirmTransactionRequest $request
	 *
	 * @return \Moneta\Types\ConfirmTransactionResponse
	 */
	public function ConfirmTransaction(\Moneta\Types\ConfirmTransactionRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ConfirmTransactionBatchRequest $request
	 *
	 * @return \Moneta\Types\ConfirmTransactionBatchResponse
	 */
	public function ConfirmTransactionBatch(\Moneta\Types\ConfirmTransactionBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CancelTransactionRequest $request
	 *
	 * @return \Moneta\Types\CancelTransactionResponse
	 */
	public function CancelTransaction(\Moneta\Types\CancelTransactionRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CancelTransactionBatchRequest $request
	 *
	 * @return \Moneta\Types\CancelTransactionBatchResponse
	 */
	public function CancelTransactionBatch(\Moneta\Types\CancelTransactionBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\RefundRequest $request
	 *
	 * @return \Moneta\Types\RefundResponse
	 */
	public function Refund(\Moneta\Types\RefundRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ForecastTransactionRequest $request
	 *
	 * @return \Moneta\Types\ForecastTransactionResponse
	 */
	public function ForecastTransaction(\Moneta\Types\ForecastTransactionRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\VerifyTransactionRequest $request
	 *
	 * @return \Moneta\Types\VerifyTransactionResponse
	 */
	public function VerifyTransaction(\Moneta\Types\VerifyTransactionRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\VerifyTransferRequest $request
	 *
	 * @return \Moneta\Types\VerifyTransferResponse
	 */
	public function VerifyTransfer(\Moneta\Types\VerifyTransferRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\VerifyPaymentRequest $request
	 *
	 * @return \Moneta\Types\VerifyPaymentResponse
	 */
	public function VerifyPayment(\Moneta\Types\VerifyPaymentRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\VerifyPaymentBatchRequest $request
	 *
	 * @return \Moneta\Types\VerifyPaymentBatchResponse
	 */
	public function VerifyPaymentBatch(\Moneta\Types\VerifyPaymentBatchRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\AccountStatementRequest $request
	 *
	 * @return \Moneta\Types\AccountStatementResponse
	 */
	public function AccountStatement(\Moneta\Types\AccountStatementRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param long $request
	 *
	 * @return \Moneta\Types\FindAccountByIdResponse
	 */
	public function FindAccountById( $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param string $request
	 *
	 * @return \Moneta\Types\FindAccountByAliasResponse
	 */
	public function FindAccountByAlias( $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindAccountsListRequest $request
	 *
	 * @return \Moneta\Types\FindAccountsListResponse
	 */
	public function FindAccountsList(\Moneta\Types\FindAccountsListRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetAccountPaymentPasswordChallengeRequest $request
	 *
	 * @return \Moneta\Types\GetAccountPaymentPasswordChallengeResponse
	 */
	public function GetAccountPaymentPasswordChallenge(\Moneta\Types\GetAccountPaymentPasswordChallengeRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CreateAccountRequest $request
	 *
	 * @return long
	 */
	public function CreateAccount(\Moneta\Types\CreateAccountRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\EditAccountRequest $request
	 *
	 * @return \Moneta\Types\EditAccountResponse
	 */
	public function EditAccount(\Moneta\Types\EditAccountRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param long $request
	 *
	 * @return \Moneta\Types\GetOperationDetailsByIdResponse
	 */
	public function GetOperationDetailsById( $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindOperationsListByCTIDRequest $request
	 *
	 * @return \Moneta\Types\FindOperationsListByCTIDResponse
	 */
	public function FindOperationsListByCTID(\Moneta\Types\FindOperationsListByCTIDRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindOperationsListRequest $request
	 *
	 * @return \Moneta\Types\FindOperationsListResponse
	 */
	public function FindOperationsList(\Moneta\Types\FindOperationsListRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindLastOperationsListRequest $request
	 *
	 * @return \Moneta\Types\FindLastOperationsListResponse
	 */
	public function FindLastOperationsList(\Moneta\Types\FindLastOperationsListRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetFinancialFlowsListRequest $request
	 *
	 * @return \Moneta\Types\GetFinancialFlowsListResponse
	 */
	public function GetFinancialFlowsList(\Moneta\Types\GetFinancialFlowsListRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetTurnoverListRequest $request
	 *
	 * @return \Moneta\Types\GetTurnoverListResponse
	 */
	public function GetTurnoverList(\Moneta\Types\GetTurnoverListRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param long $request
	 *
	 * @return \Moneta\Types\FindProfileInfoByAccountIdResponse
	 */
	public function FindProfileInfoByAccountId( $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CreateProfileRequest $request
	 *
	 * @return long
	 */
	public function CreateProfile(\Moneta\Types\CreateProfileRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CheckProfileRequest $request
	 *
	 * @return \Moneta\Types\CheckProfileResponse
	 */
	public function CheckProfile(\Moneta\Types\CheckProfileRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\EditProfileRequest $request
	 *
	 * @return \Moneta\Types\EditProfileResponse
	 */
	public function EditProfile(\Moneta\Types\EditProfileRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetProfileInfoRequest $request
	 *
	 * @return \Moneta\Types\GetProfileInfoResponse
	 */
	public function GetProfileInfo(\Moneta\Types\GetProfileInfoRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindProfileInfoRequest $request
	 *
	 * @return \Moneta\Types\FindProfileInfoResponse
	 */
	public function FindProfileInfo(\Moneta\Types\FindProfileInfoRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindContractsRequest $request
	 *
	 * @return \Moneta\Types\FindContractsResponse
	 */
	public function FindContracts(\Moneta\Types\FindContractsRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindBankAccountsRequest $request
	 *
	 * @return \Moneta\Types\FindBankAccountsResponse
	 */
	public function FindBankAccounts(\Moneta\Types\FindBankAccountsRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CreateBankAccountRequest $request
	 *
	 * @return \Moneta\Types\CreateBankAccountResponse
	 */
	public function CreateBankAccount(\Moneta\Types\CreateBankAccountRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\EditBankAccountRequest $request
	 *
	 * @return \Moneta\Types\EditBankAccountResponse
	 */
	public function EditBankAccount(\Moneta\Types\EditBankAccountRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindLegalInformationRequest $request
	 *
	 * @return \Moneta\Types\FindLegalInformationResponse
	 */
	public function FindLegalInformation(\Moneta\Types\FindLegalInformationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindProfileDocumentFilesRequest $request
	 *
	 * @return \Moneta\Types\FindProfileDocumentFilesResponse
	 */
	public function FindProfileDocumentFiles(\Moneta\Types\FindProfileDocumentFilesRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\UploadProfileDocumentFileRequest $request
	 *
	 * @return \Moneta\Types\UploadProfileDocumentFileResponse
	 */
	public function UploadProfileDocumentFile(\Moneta\Types\UploadProfileDocumentFileRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindProfileDocumentsRequest $request
	 *
	 * @return \Moneta\Types\FindProfileDocumentsResponse
	 */
	public function FindProfileDocuments(\Moneta\Types\FindProfileDocumentsRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CreateProfileDocumentRequest $request
	 *
	 * @return \Moneta\Types\CreateProfileDocumentResponse
	 */
	public function CreateProfileDocument(\Moneta\Types\CreateProfileDocumentRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\EditProfileDocumentRequest $request
	 *
	 * @return \Moneta\Types\EditProfileDocumentResponse
	 */
	public function EditProfileDocument(\Moneta\Types\EditProfileDocumentRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindReportsRequest $request
	 *
	 * @return \Moneta\Types\FindReportsResponse
	 */
	public function FindReports(\Moneta\Types\FindReportsRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindAccountRelationsRequest $request
	 *
	 * @return \Moneta\Types\FindAccountRelationsResponse
	 */
	public function FindAccountRelations(\Moneta\Types\FindAccountRelationsRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetAccountRelationRequest $request
	 *
	 * @return \Moneta\Types\GetAccountRelationResponse
	 */
	public function GetAccountRelation(\Moneta\Types\GetAccountRelationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\SaveAccountRelationRequest $request
	 *
	 * @return \Moneta\Types\SaveAccountRelationResponse
	 */
	public function SaveAccountRelation(\Moneta\Types\SaveAccountRelationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\DeleteAccountRelationRequest $request
	 *
	 * @return \Moneta\Types\DeleteAccountRelationResponse
	 */
	public function DeleteAccountRelation(\Moneta\Types\DeleteAccountRelationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\GetPersonificationCodeRequest $request
	 *
	 * @return \Moneta\Types\GetPersonificationCodeResponse
	 */
	public function GetPersonificationCode(\Moneta\Types\GetPersonificationCodeRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\VerifyPersonificationCodeRequest $request
	 *
	 * @return \Moneta\Types\VerifyPersonificationCodeResponse
	 */
	public function VerifyPersonificationCode(\Moneta\Types\VerifyPersonificationCodeRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ConfirmPersonificationRequest $request
	 *
	 * @return \Moneta\Types\ConfirmPersonificationResponse
	 */
	public function ConfirmPersonification(\Moneta\Types\ConfirmPersonificationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ApprovePhoneSendConfirmationRequest $request
	 *
	 * @return \Moneta\Types\ApprovePhoneSendConfirmationResponse
	 */
	public function ApprovePhoneSendConfirmation(\Moneta\Types\ApprovePhoneSendConfirmationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\ApprovePhoneApplyCodeRequest $request
	 *
	 * @return \Moneta\Types\ApprovePhoneApplyCodeResponse
	 */
	public function ApprovePhoneApplyCode(\Moneta\Types\ApprovePhoneApplyCodeRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\SimplifiedIdentificationRequest $request
	 *
	 * @return \Moneta\Types\SimplifiedIdentificationResponse
	 */
	public function SimplifiedIdentification(\Moneta\Types\SimplifiedIdentificationRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\SecureDataRequest $request
	 *
	 * @return \Moneta\Types\SecureDataResponse
	 */
	public function SecureData(\Moneta\Types\SecureDataRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\CreateOperationTemplateRequest $request
	 *
	 * @return \Moneta\Types\CreateOperationTemplateResponse
	 */
	public function CreateOperationTemplate(\Moneta\Types\CreateOperationTemplateRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\EditOperationTemplateRequest $request
	 *
	 * @return \Moneta\Types\EditOperationTemplateResponse
	 */
	public function EditOperationTemplate(\Moneta\Types\EditOperationTemplateRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\FindOperationTemplatesRequest $request
	 *
	 * @return \Moneta\Types\FindOperationTemplatesResponse
	 */
	public function FindOperationTemplates(\Moneta\Types\FindOperationTemplatesRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\DeleteOperationTemplateRequest $request
	 *
	 * @return \Moneta\Types\DeleteOperationTemplateResponse
	 */
	public function DeleteOperationTemplate(\Moneta\Types\DeleteOperationTemplateRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	/**
	 * 
	 *
	 * @param \Moneta\Types\AsyncRequest $request
	 *
	 * @return \Moneta\Types\AsyncResponse
	 */
	public function Async(\Moneta\Types\AsyncRequest $request)
	{
		$request = array($request);
		return $this->call(__FUNCTION__, $request);
	}

	// end of block


	/**
	 * Add header to array of headers to be sent along with the SOAP request.
	 *
	 * @param mixed $header Заголовок
	 *
	 * @return void
	 */
	public function addInputHeader($header)
	{
		$this->inputHeaders[] = $header;
	}

	/**
	 * If supplied, this array will be filled with the headers from the SOAP response
	 *
	 * @return array
	 */
	public function getOutputHeaders()
	{
		return $this->outputHeaders;
	}


	/**
	 * Call method of web-service
	 *
	 * @param string $method Method name
	 * @param mixed $data Data
	 * @param mixed $options Options corresponding like SoapClient->__soapCall()
	 *
	 * @return mixed
	 */
	protected function call($method, $data, $options = null)
	{
		return $this->client->__soapCall($method, $data, $options, $this->inputHeaders, $this->outputHeaders);
	}
}