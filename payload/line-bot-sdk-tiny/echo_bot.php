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

                    if ($text == '@changelog') {
                        $message_text =
'CHANGELOG

<<VER 2>>
2.0
+ Bikin fungsi reply_message, biar baca kodingannya lebih enak
+ Kalo mau nanya ke maichan, harus pake kata "maichan" atau "mai-chan", contoh: "maichan tyo siapa?" atau "maichan jomblo?"
+ Nambah kata tanya "siapa" (baru itu doang yang jalan)
- Ngehapus keyword tanda tanya
- Ga bisa nanya kaya contoh: "akam?" atau "akam siapa?"

<<VER 1>>
1.1
+ Nambahin keyword oyasumi, @bye, maichan pinter, maichan bego, maichan jomblo, maichan beliin
1.0
+ Pake LINE Messaging API, yg tiny
+ Keyword lebih fleksibel, disisipin di kalimat juga kebaca

<<VER 0>>
0.2
+ Masukin keyword nama member
+ Masukin keyword rando, awkarin, younglex
+ keyword acak buat senang - senang
0.1
+ Nih bot lahir dari si Hendra
+ Masukin keyword dasar';
                    reply_message($client, $event['replyToken'], $message_text);
                    }


                    elseif ($text == '@bye') {
                        reply_message($client, $event['replyToken'], 'Tolong jangan kick aku dong kk :((');
                    }


                    elseif (strstr($text, 'anjing') or strstr($text, 'goblok') or strstr($text, 'tolol') or strstr($text, 'bangsat') or strstr($text, 'kontol') or strstr($text, 'titit') or strstr($text, 'memek') or strstr($text, 'ngentot') or strstr($text, 'peler') or strstr($text, 'setan')) {
                        $message_text = 'JAGA BAHASA LU NJING WKWK';
                        reply_message($client, $event['replyToken'], $message_text);
                    }


                    elseif (strstr($text, 'oyasumi')) {
                        $message_text = 'Oyasumi ^^ selamat istirahat ya :)';
                        reply_message($client, $event['replyToken'], $message_text);
                    }


                    elseif (strstr($text, 'ohayou')) {
                        $message_text = 'Pagi juga kamu~~ semoga pagi ini cerah yaa. Secerah cintaku kepadamu ><';
                        reply_message($client, $event['replyToken'], $message_text);
                    }


                    //KEYWORD MAICHAN START//
                    elseif (strstr($text, 'maichan') or strstr($text, 'mai-chan') or strstr($text, 'mai chan')) {
                        //TENTANG MAICHAN START//
                        if (strstr($text, 'pinter') or strstr($text, 'pintar') or strstr($text, 'keren') or strstr($text, 'cakep') or strstr($text, 'kawai') or strstr($text, 'lucu') or strstr($text, 'imut') or strstr($text, 'cantik')) {
                            $message_text = 'Makasih ><';
                        }

                        if (strstr($text, 'bodo') or strstr($text, 'jahat') or strstr($text, 'jelek') or strstr($text, 'bau') or strstr($text, 'lacur') or strstr($text, 'bego')) {
                            $message_text = 'Kamu jangan jahat gitu dong ke aku :((';
                        }

                        if (strstr($text, 'beliin') or strstr($text, 'ambilin') or strstr($text, 'traktir') or strstr($text, 'sewa') or strstr($text, 'ikkeh') or strstr($text, 'ikeh') or strstr($text, 'anuan') or strstr($text, 'cariin')) {
                            $message_text = 'Enak aja, ga mau :p';
                        }

                        if (strstr($text, 'vvibu') or strstr($text, 'wibu') or strstr($text, 'weeaboo')) {
                            $message_text = 'Ngaca dong bos.';
                        }

                        if (strstr($text, 'jomblo') or strstr($text, 'single') or strstr($text, 'punya pacar')) {
                            $message_text =
'Jomblo sih... emang kamu mau sama karakter ga nyata kaya aku?

PS: Nikahin waifu lu aja kagak bisa, apalagi Mai-chan';
                        }

                        if (strstr($text, 'love')or strstr($text, 'sayang') or strstr($text, 'suka')) {
                            $message_text = 'Tapi aku udah ada yang punya :( Gomenne :(
                                *nakanaide~~ nakanaidee~~'
                        }

                        elseif (strstr($text, 'siapa')) {
                            //NAMA MEMBER MAI START//
                            if (strstr($text, 'farhan')) {
                                $message_text = 'SOSOK AYAH YANG NGASIH AKU KODINGAN. MAKASIH AYAH :3';
                            }

                            if (strstr($text, 'hendra')) {
                                $message_text = 'Umm... yang bikin aku sih katanya.';
                            }


                            if (strstr($text, 'erik')) {
                                $message_text = 'Erik itu, orang kesayangannya Della.';
                            }

                            if (strstr($text, 'iqbal')) {
                                $message_text = 'Iqbal itu orang yang jago main Yoyo.';
                            }

                            if (strstr($text, 'nadhif')) {
                                $message_text = 'Siapa lu, gak kenal gw.';
                            }

                            if (strstr($text, 'izur')) {
                                $message_text = 'Dia itu orangnya baik, ajak ngomong Jawa. Pasti ngerti. Pemain dota2 lohh~ gak tau pro / gak.
                                Kamu tertarik?';
                            }

                            if (strstr($text, 'fawwaz') or strstr($text, 'pawas') or strstr($text, 'fawas') or strstr($text, 'fawaz') or strstr($text, 'aniki')) {
                                $message_text =
    'Fawwaz itu, salah satu admin di MAI ><
    Pernah deket sama cewe, tapi sayang. Gagal jadian T.T
    Yang suka nagih - nagihin uang kaos.
    "JANGAN LUPA BAYAR KAOS! 5 lagi 2 LUSIN!!"';
                            }
                        

                            if (strstr($text, 'arnold')) {
                                $message_text = 
    "Arnold ( Haru ) itu, salah satu admin di MAI ><
    Orangnya ganteng, rambutnya SWAG, kacamata'an, humoris, JOMBLO.
    Jago bikin MMD. Jangankan MMD, hati kamu aja bisa dibuat klepek - klepek sama dia ><

    Masih gak mau sama Arnold?";
                            }

                            if (strstr($text, 'della')) {
                                $message_text = 'Della itu, salah satu admin MAI >< kesayangannya Erik.';
                            }

                            if (strstr($text, 'choky')) {
                                $message_text = 'Choky itu, salah satu admin MAI >< orangnya G*blog - G*blog gimana gitu.';
                            }

                            if (strstr($text, 'valdi')) {
                                $message_text =
    'Valdi itu, salah satu member MAI, dia lagi cari jodoh loohh~

    Kamu tertarik?';
                            }

                            if (strstr($text, 'akam')) {
                                $message_text = 
    'Beatboxers nya MAI punya :3 tapi agak " freak " gitu orangnya.
    Katanya sih mirip Anca :v

    Pesan dari member lain: " Tiati, jaga bokongmu! "';
                            }

                            if (strstr($text, 'ajam')) {
                                $message_text = 
    'Creatornya 13MeterP, Jagonya ngemix lagu - lagu Vocaloid.

    Cukup lagu aja yang di mix sama dia, hati kamu jangan. Hehe:))';
                            }

                            if (strstr($text, 'vero')) {
                                $message_text =
    'Orang yang ngakunya jago main basket,
    tapi emang jago sih.

    yang katanya "ganteng" tapi gak juga.
    Kamu tertarik ?';
                            }

                            if (strstr($text, 'anca')) {
                                $message_text = 
    'Orang yang ngaku dirinya " ganteng "
    Dan setiap ke event itu suka minta foto bareng.

    Ketemu cosplayer dikit, foto bareng.
    Asik sih orangnya. Tapi sayang, mirip - mirip Akam dikit.
    Kamu tertarik?';
                            }

                            if (strstr($text, 'bayu')) {
                                $message_text = 
    'Bayu itu salah satu admin MAI ><
    Mukanya mirip Ajam dikit, katanya.

    Kayaknya sih jomblo, kamu tertarik?';
                            }

                            if (strstr($text, 'jovan')) {
                                $message_text = '" Jari gw jadi mau main audit lagi (Har Har) " he said.';
                            }

                            if (strstr($text, 'runa')) {
                                $message_text =
    'Runa itu salah satu admin MAI ><
    Kawaii Usagi :3 banyak yang ngefans loohh sama dia.

    Kamu mau ngefans juga?';
                            }

                            if (strstr($text, 'udin')) {
                                $message_text =
    'Udin itu salah satu sesepuh MAI.
    Ganteng, kece. Dan lain - lain #uweeggghh *muntah*

    Kamu tertarik?';
                            }

                            if (strstr($text, 'sean')) {
                                $message_text =
    'Sean itu salah satu anggota MAI,
    Mau tanya tentang Evenged sevenfold? eh salah maksudnya Evengelion?
    Ke dia aja!!';
                            }

                            if (strstr($text, 'tyo') or strstr($text, 'tio')) {
                                $message_text =
    'Dia itu aniki nya KRIBO, sukanya "kode - kodein" cewe di grup.
    Tapi, jadian KAGA.

    KECEWA LAAH!!';
                            }

                            if (strstr($text, 'acil')) {
                                $message_text =
    'Acil itu salah satu member MAI ><
    Kalo masalah cewe, dia jagonya. Apalagi idol.

    Kamu butuh jasa stalking gebetan? ke dia aja.';
                            }

                            if (strstr($text, 'nabila') or strstr($text, 'nabilla')) {
                                $message_text =
    'Salah satu cewe di MAI >< kalo ada event Jepang didaerah Jakarta, kasih tau dia yaa~
    Dia itu rajin banget kalo ikutan kaya gitu.

    Btw, katanya sih dia "JOMBLO". Kamu tertarik?';
                            }

                            if (strstr($text, 'sapik')) {
                                $message_text =
    'Sapik " MoooOoo~~ "  ehh salahh ><
    dia itu salah satu member MAI >< temen kuliah nya Erik sama Tyo~
    kayaknya Jomblo.
    Kamu tertarik?';
                            }

                            if (strstr($text, 'satria')) {
                                $message_text =
    'Baja hitam?

    Eh salah yaa, hmm.. Dia itu ownernya MOI ~ member MAI juga, di DP nya sih ganteng.
    tapi gak tau deh kalo suka yang ganteng juga.
    Kamu tertarik?';
                            }

                            if (strstr($text, 'zia')) {
                                $message_text =
    'Dia salah satu anggota MAI ><

    Kalo di chat itu asik, kamu butuh temen chat? boleh tuh sama dia.
    Tapi,kalo join grup 6 bulan sekali sehabis leave. Gak tau kenapa.

    Kamu tertarik?';
                            }

                            if (strstr($text, 'wina')) {
                                $message_text =
    'Dia itu salah satu cewe di MAI ><

    Pernah naksir sama satu admin di MAI, penasaran?
    SAMA. #Gosip
    Kalo gak salah masih jomblo, kamu tertarik?';
                            }

                            if (strstr($text, 'sandi')) {
                                $message_text =
    'Dia itu salah satu member GELAP nya MAI ><

    Kamu butuh bahan bacol? ke dia aja. LENGKAAAPP!!
    Tertarik?';
                            }

                            if (strstr($text, 'raden')) {
                                $message_text =
    'Raden itu salah satu member di MAI ><
    Orangnya asik, butuh temen buat ke event? boleh tuh ajak dia.

    Btw, dia udah punya pacar yaa~ jangan harap bisa jadian sama dia ><';
                            }

                            if (strstr($text, 'arsyad') or strstr($text, 'bangsyad')) {
                                $message_text =
    'Bangsyad sesepuh nya MAI >< orangnya humoris.
    Ganteng dikit, foto bareng cewe, tapi gak tau cewe itu pacarnya atau bukan. Yang pasti foto bareng cewe.
    Kamu suka galau? butuh orang yang humoris?

    Bangsyad jagonya. Kamu tertarik?';
                            }

                            if (strstr($text, 'labana')) {
                                $message_text =
    'Salah satu member MAI >< dia itu cosplayer looh.
    Tapi mirip kaya Akam, JAGA bokong kalian!! jika tidak ingin kejadian yang tidak - tidak :)

    Dia juga anak SWAG, kekinian. Tapi sayang, HOMO.
    Kamu tertarik?';
                            }

                            if (strstr($text, 'vera')) {
                                $message_text = 'I love you Ver. Hehe:))';
                            }

                            if (strstr($text, 'sasa')) {
                                $message_text = 
    'Sasa itu salah satu cewe di MAI ><
    Kesayangaannya Raden. Hehe:)) jadi jangan harap bisa pacarin dia yaa~~';
                            }

                            if (strstr($text, 'zaza') or strstr($text, 'zhasza') or strstr($text, 'jaja')) {
                                $message_text =
    'Zaza biasa dipanggil gitu. Salah satu member MAI ><
    Tukang cipok cewe. Hehe:))';
                            }

                            if (strstr($text, 'revi')) {
                                $message_text =
    'Revi itu salah satu member MAI ><

    Dia cosplayer asal Bandung loohh~ ganteng kok dia.
    Tapi sayang, dia udah ada yang punya. Jadi mohon maaf buat kalian para cewe. Hehe:))';
                            }

                            if (strstr($text, 'rendra')) {
                                $message_text =
    'Salah satu member MAI ><

    Dia itu pemain LS loohH~ kayaknya sih " pro "

    Mau mabar sama dia?';
                            }

                            if (strstr($text, 'kartika')) {
                                $message_text =
    'Kartika itu salah satu cewe di MAI ><
    Kuliah di telkom sama kaya Arnold.
    Cantik sih tapi udah ada yang punya. Jadi, jangan harap yaa~~';
                            }

                            if (strstr($text, 'natasha')) {
                                $message_text =
    'Salah satu cewe di MAI ><

    Kehidupan cintanya gelap.
    Kamu mau Nerangin-nya ?';
                            }

                            if (strstr($text, 'raja')) {
                                $message_text =
    '"Then if u cut ur dick the bidji is still gondal gandul u know?"

    Begitulah katanya ^^';
                            }


                            //NAMA RANDOM START//
                            if (strstr($text, 'awkarin')) {
                                $message_text = "KLEAN SMUA SUTJIH AQUWH PNUH DOSYAAAHHHH";
                            }

                            if (strstr($text, 'rando')) {
                                $message_text = "HEY WASSAP MA FRIEND";
                            }
                        }

                        reply_message($client, $event['replyToken'], $message_text);
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
