  
<style>
    #background{
        position:absolute;
        z-index:0;
        background:white;
        display:block;
        min-height:50%; 
        min-width:50%;
        margin-top: 20%;
        margin-left: 20%;
        color:yellow;
    }

    #content{
        position:absolute;
        z-index:1;
    }

    #bg-text
    {
        color:red;
        font-size:120px;
        transform:rotate(320deg);
        -webkit-transform:rotate(320deg);
    }
</style>
<div id="background">
    @if ($status == "Menunggu")
    <div id="bg-text">DRAFT</div>
    @elseif ($status == "Tolak")
    <div id="bg-text">TOLAK</div>
    @endif
</div>
<font face="Arial, Helvetica, sans-serif" id="content">
      <table cellspacing="0" cellpadding="2" border="1" width="100%">
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none"></td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none"></td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none">I.</td>
              <td width="18%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Berangkat Dari</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-left-style:none; border-bottom-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  (tempat kedudukan)</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Ke</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">{{$pejabat->jabatan}} Kabupaten Brebes</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">{{$pejabat->nama}}</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">NIP. {{$pejabat->nip}}
          </tr>
          <?php if($pejabat->jabatan_sebenarnya=='-'){?>
          <?php }else{?>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="1%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">
                  {{$pejabat->jabatan_sebenarnya}} Kabupaten Brebes</td>
          </tr>
          <?php }?>


          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none" align="center">II.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Tiba di</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Berangkat Dari</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-left-style:none; border-bottom-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Ke</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none">NIP.
              </td>
              <td width="1%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">NIP.</td>
          </tr>

          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none" align="center">III.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Tiba di</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Berangkat Dari</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-left-style:none; border-bottom-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Ke</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none">NIP.
              </td>
              <td width="1%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">NIP.</td>
          </tr>

          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none" align="center">IV.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Tiba di</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Berangkat Dari</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-left-style:none; border-bottom-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Ke</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none">NIP.
              </td>
              <td width="1%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">NIP.</td>
          </tr>

          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none" align="center">V.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Tiba di</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Berangkat Dari</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-left-style:none; border-bottom-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  Ke</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  :</td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none">NIP.
              </td>
              <td width="1%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-top-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">NIP.</td>
          </tr>

          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-bottom-style:none" align="center">VI.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
                  Tiba di</td>
              <td width="1%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">:
              </td>
              <td width="29%" style="border-right-style:none; border-left-style:none; border-bottom-style:none">
              </td>
              <td width="2%" align="center" style="border-right-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-left-style:none; border-bottom-style:none" colspan="3">Telah
                  diperiksa, dengan keterangan bahwa perjalanan tersebut</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  (tempat kedudukan)</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-left-style:none; border-top-style:none; border-bottom-style:none"
                  colspan="3">atas perintahnya dan semata-mata untuk kepentingan jabatan</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:5">
                  Pada Tanggal</td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
                  :</td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-left-style:none; border-top-style:none; border-bottom-style:none"
                  colspan="3">dalam waktu yang sesingkat-singkatnya</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="1%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none">
              </td>
              <td width="29%" style="border-top-style:none; border-bottom-style:none; border-left-style:none"></td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">{{$pejabat->jabatan}} Kabupaten Brebes</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%"
                  style="border-top-style:none; border-bottom-style:none; border-left-style:none; padding-bottom:50"
                  colspan="3">{{$pejabat->jabatan}} Kabupaten Brebes</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">{{$pejabat->nama}}</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">{{$pejabat->nama}}</td>
          </tr>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none; border-bottom-style:none">
              </td>
              <td width="17%"
                  style="border-right-style:none; border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">NIP. {{$pejabat->nip}}</td>
              <td width="2%" align="center"
                  style="border-right-style:none; border-top-style:none; border-bottom-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none; border-bottom-style:none"
                  colspan="3">NIP. {{$pejabat->nip}}</td>
          </tr>
          <?php if($pejabat->jabatan_sebenarnya=='-'){?>
          <?php }else{ ?>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; border-top-style:none"></td>
              <td width="17%" style="border-right-style:none; border-top-style:none; border-left-style:none"
                  colspan="3">{{$pejabat->jabatan_sebenarnya}} Kabupaten Brebes</td>
              <td width="2%" align="center" style="border-right-style:none; border-top-style:none"></td>
              <td width="18%" style="border-top-style:none; border-left-style:none" colspan="3">
                  {{$pejabat->jabatan_sebenarnya}} Kabupaten Brebes</td>
          </tr>
          <?php }?>
          <tr style="font-size:10px">
              <td width="3%" style="border-right-style:none; padding-bottom:25" align="center">VII.</td>
              <td width="17%" style="border-right-style:none; border-left-style:none; padding-bottom:25">Catatan
                  Lain-lain</td>
              <td width="1%" style="border-right-style:none; border-left-style:none"></td>
              <td width="29%" style="border-right-style:none; border-left-style:none"></td>
              <td width="2%" align="center" style="border-right-style:none"></td>
              <td width="18%" style="border-right-style:none; border-left-style:none"></td>
              <td width="1%" style="border-right-style:none; border-left-style:none"></td>
              <td width="29%" style="border-left-style:none"></td>
          </tr>
      </table>
  </font>
  <script>
      window.print()
  </script>
