const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const http = require('http');
const path = require('path');
const { Webhook, MessageBuilder } = require('discord-webhook-node');

const app = express();

app.use(bodyParser.json());
app.use(cors());

///////////////////
//   ENDPOINTS   //
///////////////////
// No-path endpoint
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, '/public/index.html'));
});

app.get('/pt', (req, res) => {
    res.sendFile(path.join(__dirname, '/public/index-plaintext.html'));
});

app.post('/clip-check', (req, res) => {
    const cliplink = req.query.clipLink;
    const user = req.query.medalUsername;
    const webhook = req.query.webhookURL;
    const caption = req.query.caption;
    if(cliplink) {
        const Hook = new Webhook(`${webhook}`)
        Hook.setUsername('Medal Clip Webhook')
        Hook.setAvatar('https://media.pocketgamer.biz/2019/10/100695/medal-logo-r225x.png')
        
        const embed = new MessageBuilder()
        .setTitle(`Unofficial Medal Clip Webhook`)
        .setAuthor('Awex', 'https://avatars.githubusercontent.com/u/68027680?v=4')
        .setURL(`${cliplink}`)
        .setColor('#c49300')
        .setDescription(`${user} submitted a clip!\nCaption: ${caption}`)
        .setFooter('MCW')
        .setTimestamp();

        Hook.send(embed)
        Hook.send(cliplink)

        res.redirect('/result?status=success')

    } else if (!cliplink || !user || !webhook || !caption ||  error || UnhandledPromiseRejectionWarning) {
        res.redirect('/result?status=fail')
    }
});

app.get('/clip-check-pt', (req, res) => {
    const cliplink = req.query.clipLink;
    const user = req.query.medalUsername;
    const webhook = req.query.webhookURL;
    const caption = req.query.caption;
    if(cliplink) {
        const Hook = new Webhook(`${webhook}`)
        Hook.setUsername('Medal Clip Webhook')
        Hook.setAvatar('https://media.pocketgamer.biz/2019/10/100695/medal-logo-r225x.png')

        Hook.send(`${user} just sent a clip! Check it out; ${cliplink}\n> ${caption}`)

        res.redirect('/result?status=success')

    } else if (!cliplink || !user || !webhook || !caption) {
        res.redirect('/result?status=fail')
    }
});

app.get('/result', (req, res) => {
    const status = req.query.status
    if(status === 'fail') {
        res.sendFile(path.join(__dirname, '/public/fail.html'));
    } else if (status === 'success') {
        res.sendFile(path.join(__dirname, '/public/success.html'));
    }
})

            /////////////////////////
            //  HTTP SERVER START  //
            /////////////////////////

            const httpServer = http.createServer(app);

            httpServer.listen(80, () => {
              console.log('Done!');
            });  

