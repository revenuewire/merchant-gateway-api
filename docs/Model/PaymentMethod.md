# PaymentMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | [**\Swagger\Client\Model\Method**](Method.md) |  | [optional] 
**weight** | **int** | Int between 0 to 255. For example, if you want to send a tiny portion of your traffic to one gateway and the rest to another gateway, you might specify weights of 1 and 255. The gateway with a weight of 1 gets 1/256th of the traffic (1/1+255), and the other gateway gets 255/256ths (255/1+255). You can gradually change the balance by changing the weights. If you want to stop sending traffic to a resource, you can change the weight for that record to 0. | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


