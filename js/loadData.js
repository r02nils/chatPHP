$(document).ready(function()
{
  loadChat();

  function loadChat(){
    $("#msg").load("loadData/loadMsg.php");
    setTimeout(loadChat,2000);
  }
});

$(document).ready(function()
{
  loadChat();

  function loadChat(){
    $("#groups").load("loadData/loadGroups.php");
    setTimeout(loadChat,5000);
  }
});
