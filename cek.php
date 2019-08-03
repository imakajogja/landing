<?php
              $sumber = 'https://blog.imaka.or.id/feed/json';
              $konten = file_get_contents($sumber);
              $data = json_decode($konten, true);
              foreach($data['items'] as $data) {
                  echo $data['title'];
                  echo $data['image'];
              }
       ?>