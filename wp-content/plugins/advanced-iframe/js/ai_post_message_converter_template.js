/**
 * Use this function to convert the data sent by your external domain into 
 * the basic advanced iframe structure:
 * 
 *  var newData = {aitype:'height', height:<height>, width:<width>, id:<id>, anchor:0}
 *  return { data: JSON.stringify(newData)}
 *  
 *  This file has to be stored in the advanced-iframe-custom folder
 *  as: ai_post_message_converter_XXX.js
 *  while XXX is the id of the iframe. This makes it possible to have the default 
 *  post message and other post messages from other sources running on the same domain.
 *
 *
 */
 /*jshint unused:false*/
function aiConvertPostMessage(event) {
  // read the remote data and than return the new structure like shown above.
  
  /* below you find an example for the iframesizer script.
  var msgId = '[iFrameSizer]';
		var msgIdLen = msgId.length;
    var msgData = event.data.substr(msgIdLen).split(':');
  
    // read the remote data and than return the new structure like shown above.  
    var newData = {
        aitype:'height', 
        id:msgData[0],
        height:msgData[1], 
        width:msgData[2],
        anchor:0   
    };                                ,
    return { data: JSON.stringify(newData)}
  */
}