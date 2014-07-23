<?php
class sriagenda_ses extends xPDOSimpleObject {
    
    public function save($cacheFlag = null)
    {

        $result = parent::save($cacheFlag);

        $preventspeakerhandling = $this->get('preventspeakerhandling');

        if (!$preventspeakerhandling && $result) {
            $saved_speakers = array();
            $speakers = $this->xpdo->fromJson($this->get('speakers'));
            if (is_array($speakers)) {
                $posted_speakers = array();
                $pos = 1;
                foreach ($speakers as $speaker) {
                    $migx_id = $this->xpdo->getOption('MIGX_id', $speaker, 0);
                    $speaker['order'] = $pos;
                    if (array_key_exists($migx_id, $posted_speakers)){
                        //duplicate MIGX_id, create another unique migx_id
                        $migx_id = $migx_id.'_'.$pos;    
                    }                    
                    $posted_speakers[$migx_id] = $speaker;
                    $pos++;
                }

                if ($existing_speakers = $this->getMany('Speakers')) {
                    foreach ($existing_speakers as $speaker_object) {
                        $migx_id = $speaker_object->get('MIGX_id');
                        if (array_key_exists($migx_id, $posted_speakers)) {
                            $speaker = $posted_speakers[$migx_id];
                            $speaker_object->fromArray($speaker);
                            $speaker_object->save();
                            $saved_speakers[$pos] = $formtab;
                            unset($posted_speakers[$migx_id]);
                        } else {
                            $speaker_object->remove();
                        }
                    }
                }


                foreach ($posted_speakers as $speaker) {
                    if ($speaker_object = $this->xpdo->newObject('sriagenda_ses_spk')) {
                        $speaker_object->fromArray($speaker);
                        $speaker_object->set('ses_id', $this->get('id'));
                        $speaker_object->save();
                        //$pos = isset($saved_speakers['order']) ? $speaker['order'] : 0;                        
                        //$saved_speakers[$pos] = $speaker;
                    }
                }
                
                /*
                ksort($saved_speakers);
                $speakers = array();
                foreach ($saved_speakers as $speaker){
                    $speakers[]=$speaker;
                }
                
                $this->set('speakers',$this->xpdo->toJson($speakers));
                $this->set('preventspeakerhandling',1);
                $this->save();
                */
            }
        }

        return $result;

    }    
}