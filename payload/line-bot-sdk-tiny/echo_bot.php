<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = '9bZUdMvHqvsGsTcPeFQRzYRdl9ZiY9wJ8qoue1bxIti8MjKkIsmt+8M5dIWBUd/wqYcloX5JsqIiA4Be25SSqkM/Wi/pG4peQU40O0ZE73G3DqG3PUEocLCJMRUB3qZjdp08Ab/PZZXc+a21FPyzvwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '552e9bfb41edce9aec292ea0f3ca4cce';

function reply_message($client, $replytoken, $text) {
    $client->replyMessage(array(
        'replyToken' => $replytoken,
        'messages' => array(
            array(
                'type' => 'text',
                'text' => $text
            )
        )
    ));
}

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];

            switch ($message['type']) {
                case 'text':

                    $text = strtolower($message['text']);
                    if (strstr($text, 'anjing') or strstr($text, 'goblok') or strstr($text, 'tolol') or strstr($text, 'bangsat') or strstr($text, 'kontol') or strstr($text, 'titit') or strstr($text, 'memek') or strstr($text, 'ngentot') or strstr($text, 'peler')) {
                        reply_message($client, $event['replyToken'], 'JAGA BAHASA LU NJING WKWK');
                    }

                    elseif (strstr($text, 'oyasumi')) {
                        reply_message($client, $event['replyToken'], 'Oyasumi ^^ selama istirahat ya :)');
                    }

                    elseif (strstr($text, 'maichan') or strstr($text, 'mai-chan') or strstr($text, 'maichan')) {
                        //TENTANG MAICHAN START
                        if (strstr($text, 'pinter') or strstr($text, 'pintar') or strstr($text, 'keren') or strstr($text, 'cakep') or strstr($text, 'kawai') or strstr($text, 'lucu') or strstr($text, 'imut') or strstr($text, 'cantik')) {
                            reply_message($client, $event['replyToken'], 'Makasih ><');
                        }

                        if (strstr($text, 'bodo') or strstr($text, 'jahat') or strstr($text, 'jelek') or strstr($text, 'bau') or strstr($text, 'lacur')) {
                            reply_message($client, $event['replyToken'], 'Kamu jangan jahat gitu dong ke aku :((');
                        }

                        if (strstr($text, 'beliin') or strstr($text, 'ambilin') or strstr($text, 'traktir') or strstr($text, 'sewa') or strstr($text, 'ikkeh') or strstr($text, 'ikeh') or strstr($text, 'anuan') or strstr($text, 'cariin')) {
                            reply_message($client, $event['replyToken'], 'Enak aja, ga mau :p');
                        }

                        if (strstr($text, 'vvibu') or strstr($text, 'wibu') or strstr($text, 'weeaboo')) {
                            reply_message($client, $event['replyToken'], 'Ngaca dong bos');
                        }

                        if (strstr($text, 'jomblo') or strstr($text, 'single') or strstr($text, 'punya pacar')) {
                            $message_text =
                            'Jomblo sih... emang kamu mau sama karakter ga nyata kaya aku?

                            PS: Nikahin waifu lu aja kagak bisa, apalagi Mai-chan';
                            reply_message($client, $event['replyToken'], $message_text);
                        }
                    }

                    elseif (strstr($text, '?')) {
                        //NAMA MEMBER MAI START
                        if (strstr($text, 'farhan')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'SEORANG AYAH YANG NGASIH AKU KODINGAN. MAKASIH AYAH :3'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'hendra')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Siapa ya?'
                                )
                            )
                        ));
                        }


                        if (strstr($text, 'erik')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Erik itu, orang kesayangannya Della.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'iqbal')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Iqbal itu orang yang jago main Yoyo.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'nadhif')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Siapa lu, gak kenal gw.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'fawwaz') or strstr($text, 'pawas') or strstr($text, 'fawas') or strstr($text, 'fawaz') or strstr($text, 'aniki')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Fawwaz itu, salah satu admin di MAI ><
Pernah deket sama cewe, tapi sayang. Gagal jadian T.T & Yang suka nagih - nagihin kaos.
" JANGAN LUPA BAYAR KAOS! 5 lagi 2 LUSIN!! "'
                                )
                            )
                        ));
                        }
                    

                        if (strstr($text, 'arnold')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => "Arnold ( Haru ) itu, salah satu admin di MAI ><
Orangnya ganteng, rambutnya SWAG, kacamata'an, humoris, JOMBLO.
Jago bikin MMD. Jangankan MMD, hati kamu aja bisa dibuat klepek - klepek sama dia ><

Masih gak mau sama Arnold?"
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'della')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Della itu, salah satu admin MAI >< kesayangannya Erik.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'choky')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Choky itu, salah satu admin MAI >< orangnya G*blog - G*blog gimana gitu.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'valdi')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Valdi itu, salah satu member MAI, dia lagi cari jodoh loohh~

Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'akam')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Beatboxers nya MAI punya :3 tapi agak " freak " gitu orangnya.
Katanya sih mirip Anca :v

Pesan dari member lain: " Tiati, jaga bokongmu! "'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'ajam')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Creatornya 13MeterP, Jagonya ngemix lagu - lagu Vocaloid.

Cukup lagu aja yang di mix sama dia, hati kamu jangan. Hehe:))'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'vero')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Orang yang ngakunya jago main basket,
tapi emang jago sih.

yang katanya " ganteng " tapi gak juga.
Kamu tertarik ?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'anca')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Orang yang ngaku dirinya " ganteng "
Dan setiap ke event itu suka minta foto bareng.

Ketemu cosplayer dikit, foto bareng.
Asik sih orangnya. Tapi sayang, mirip - mirip Akam dikit.
Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'bayu')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Bayu itu salah satu admin MAI ><
Mukanya mirip Ajam dikit.

Kayaknya sih jomblo, kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'jovan')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => '" Jari gw jadi mau main audit lagi (Har Har) " he said.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'runa')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Runa itu salah satu admin MAI ><
Kawaii Usagi :3 banyak yang ngefans loohh sama dia.

Kamu mau ngefans juga?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'udin')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Udin itu salah satu sesepuh MAI.
Ganteng, kece. Dan lain - lain #uweeggghh *muntah*

Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'sean')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Sean itu salah satu anggota MAI,
Mau tanya tentang Evenged sevenfold? eh salah maksudnya Evengelion?
Ke dia aja!!'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'tyo') or strstr($text, 'tio')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Dia itu aniki nya KRIBO, sukanya "kode - kodein" cewe di grup.
Tapi, jadian KAGA.

KECEWA LAAH!!'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'acil')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Acil itu salah satu member MAI ><
Kalo masalah cewe, dia jagonya. Apalagi idol.

Kamu butuh jasa stalking gebetan? ke dia aja.'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'nabila') or strstr($text, 'nabilla')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Salah satu cewe di MAI >< kalo ada event Jepang didaerah Jakarta, kasih tau dia yaa~
Dia itu rajin banget kalo ikutan kaya gitu.

Btw, katanya sih dia "JOMBLO". Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'sapik')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Sapik " MoooOoo~~ "  ehh salahh >< dia itu salah satu member MAI >< temen kuliah nya Erik sama Tyo~ kayaknya Jomblo.
                                    Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'satria')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Baja hitam?

Eh salah yaa, hmm.. Dia itu ownernya MOI ~ member MAI juga, di DP nya sih ganteng.
tapi gak tau deh kalo suka yang ganteng juga.
Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'zia')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Dia salah satu anggota MAI ><

Kalo di chat itu asik, kamu butuh temen chat? boleh tuh sama dia.
Tapi,kalo join grup 6 bulan sekali sehabis leave. Gak tau kenapa.

Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'wina')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Dia itu salah satu cewe di MAI ><

Pernah naksir sama satu admin di MAI, penasaran?
SAMA. #Gosip
Kalo gak salah masih jomblo, kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'sandi')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Dia itu salah satu member GELAP nya MAI ><

Kamu butuh bahan bacol? ke dia aja. LENGKAAAPP!!
Tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'raden')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Raden itu salah satu member di MAI ><
Orangnya asik, butuh temen buat ke event? boleh tuh ajak dia.

Btw, dia udah punya pacar yaa~ jangan harap bisa jadian sama dia ><'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'arsyad') or strstr($text, 'bangsyad')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Bangsyad sesepuh nya MAI >< orangnya humoris.
Ganteng dikit, foto bareng cewe, tapi gak tau cewe itu pacarnya atau bukan. Yang pasti foto bareng cewe.
Kamu suka galau? butuh orang yang humoris?

Bangsyad jagonya. Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'ban')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Salah satu member MAI >< dia itu cosplayer looh.
Tapi mirip kaya Akam, JAGA bokong kalian!! jika tidak ingin kejadian yang tidak - tidak :)

Dia juga anak SWAG, kekinian. Tapi sayang, HOMO.
Kamu tertarik?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'vera')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'I love you Ver. Hehe:))'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'sasa')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Sasa itu salah satu cewe di MAI ><
Kesayangaannya Raden. Hehe:)) jadi jangan harap bisa pacarin dia yaa~~'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'zaza') or strstr($text, 'zhasza') or strstr($text, 'jaja')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Zaza biasa dipanggil gitu. Salah satu member MAI ><
Tukang cipok cewe. Hehe:))'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'revi')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Revi itu salah satu member MAI ><

Dia cosplayer asal Bandung loohh~ ganteng kok dia.
Tapi sayang, dia udah ada yang punya. Jadi mohon maaf buat kalian para cewe. Hehe:))'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'rendra')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Salah satu member MAI ><

Dia itu pemain LS loohH~ kayaknya sih " pro "

Mau mabar sama dia?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'kartika')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Kartika itu salah satu cewe di MAI ><
Kuliah di telkom sama kaya Arnold.
Cantik sih tapi udah ada yang punya. Jadi, jangan harap yaa~~'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'natasha')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Salah satu cewe di MAI ><

Kehidupan cintanya gelap.

Kamu mau Nerangin-nya ?'
                                )
                            )
                        ));
                        }

                        if (strstr($text, 'raja')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => '"Then if u cut ur dick the bidji is still gondal gandul u know?"

Begitulah katanya ^^'
                                )
                            )
                        ));
                        }
                        //NAMA MEMBER MAI END

                        if (strstr($text, 'aku')) {
                            $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => '"Aku" siapa? Mai-chan ga ngerti :('
                                )
                            )
                        ));
                        }
                    }

                    elseif ($text == '@bye') {
                        $client->replyMessage(array(
                            'replyToken' => $event['replyToken'],
                            'messages' => array(
                                array(
                                    'type' => 'text',
                                    'text' => 'Ih jangan usir aku kk :('
                                )
                            )
                        ));
                    }
                    break;
                default:
                    error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
