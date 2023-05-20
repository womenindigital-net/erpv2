<?php

namespace App\Utility;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;

class DomainSubdomainAreaActivity
{
    // public static array $firstLayers = [
    //     'Section E:  Domain 01 - Physical development',
    //     'Section F:  Domain 02 : Intellectual / cognitive development',
    //     'Section G : Domain 03 - Emotional development',
    //     'Section H : Domain 04 - Social and ethical development',
    //     'Section I: Independent skills',
    //     'Section J : Adulthood, partner selection and family',
    //     'Section N: Task Analysis Guideline',
    //     [
    //         'Section E:  Domain 01 - Physical development' => 'Motor Planning'
    //     ],
    //     [
    //         'Section F:  Domain 02 : Intellectual / cognitive development' => [
    //             'Sensory Skills',
    //             'Skill Development planner'
    //         ]
    //     ],
    //     [
    //         'Section G : Domain 03 - Emotional development' => [
    //             'Intrapersonal',
    //             'Independent Daily Living Skills'
    //         ]
    //     ],
    //     [
    //         'Section H : Domain 04 - Social and ethical development' => [
    //             'Social Emotional Learning (SEL)',
    //             'Leisure & Recreation',
    //             'Social Communication skills',
    //             'Ethical Values',
    //         ]
    //     ],
    //     [
    //         'Section I: Independent skills' => [
    //             ' Self development',
    //             'Career planning',
    //             'Career Preparation',
    //         ]
    //     ],
    //     [
    //         'Section J : Adulthood, partner selection and family' => 'Starting family life'

    //     ],
    //     [
    //         'Section K : Evaluation forms' => [
    //             'Pre-Vocational Evaluation forms',
    //             'Vocational Evaluation form',
    //             'Independence Evaluation',
    //             'Evaluation rate of different Job areas'
    //         ]
    //     ],
    //     [
    //         'Section  L: Employment' => [
    //             'Expectations from employers : job criterions ',
    //             'Employment deed (sample)',
    //             'Maintaining database of the students working with others – database sample form',
    //             'Job monitoring form'
    //         ]
    //     ],
    //     [
    //         'Section  M: Suggested Vocational trades for employment We shall create separate guidelines and to include in the software later on' => [
    //             'Computer ( basic and advance)',
    //             'Paper packet',
    //             'Bakery',
    //             'Block & tie-dye',
    //             'Beads jewelry',
    //             'Catering',
    //             'Food serving',
    //             'Gardening',
    //             'Mechanical repair',
    //             'Carpet slipper'
    //         ]
    //     ],
    //     [
    //         'Section  N: Task Analysis Guideline'
    //     ]

    // ];
    public $ArrA = [
        'Section A : Domain Distribution structure'=>[

        ]
    ];

    public $ArrB = [
        'Section B : Preparatory framework'=>[
            'The Process of Using the Skills Planner' => [
              
            ],
            'Individual Target Plan (ITP) form of a student' => [
        
            ],
            'Definitions' => [
                'What are Life Skills?'=>[
                
                ],
                'Pre-vocational Skills'=>[
                    
                ]
            ]  
        ]
    ]; 

    public $ArrC = [
        'Section C:  Steps of the work process'=>[

        ]
    ];

    public $ArrD = [
        'Section D : Assessment package'=>[
            'Functional Communication Assessment' => [
              
            ],
            'Speech and language Assessment' => [
        
            ]  
        ]
    ]; 

    public $ArrE = [
        'Section E:  Domain 01 - Physical development'=>[
            'Motor Planning' => [
                'Gross Motor Skills' => [
                    'General Play',
                    'Organized Play',
                    'Balance Beam',
                    'Ball Play',
                    'Skipping',
                    'Jumping',
                    'Jump Rope',
                    'Jumping Jacks',
                    'Other Walks',
                    'Rolling',
                    'Bouncing',
                    'Rhythms',
                    'Fitness & Physical Activity',
                    'Movement',
                    'Adaptations',
                    'Fundamental Movement Skills'
                ],
                'Fine Motor Skills' => [
                    'Scissor activities',
                    'Craft activities',
                    'Construction toys',
                    'Workbook puzzles and games',
                    'Game suggestions',
                    'Eye-hand coordination games',
                    'Work on fasteners',
                    'Painting on board or paper',
                    'Obstacle Course',
                    'Crossing the Midline',
                    'Two-Handed Activities'
                ],
                'Eye Movements'=>[
                    'Exercises for eye movement'
                ],
                'Oral-motor activities'=>[
                    'Chewy Foods(Organizing)',
                    'Crunchy Foods(Alerting)',
                    'Sucking Foods(Calming)'
                ]  
            ]     
        ]
    ];
    
    public $ArrF = [
        'Section F:  Domain 02 : Intellectual / cognitive development'=>[
            'Sensory Skills' => [
                'Sensory diet' => [
                    'Leaky Guts',
                    'Taste / Smell',
                    'Auditory',
                    'Touch'
                ],
                'Visual supports' => [
                    'Activities to Improve Visual Perception'
                ] 
            ],
            'Skill Development planner' => [
                'Intrapersonal skills' => [
                    'Sex education',
                    'Body Awareness',
                    'Physical Growth',
                    'Body parts',
                    'Assertiveness',
                    'Decision Making',
                    'Distance maintains',
                    'Good touch/bad touch',
                    'Understanding situation',
                    'Curiosity and asking question',
                    'Generalization ability'

                ],
                'Functional Academic Skills' => [
                    'Pre- reading',
                    'Chronological speech Awareness Skills',
                    'Early Reading Skills',
                    'Functional Reading Skills',
                    'Writing : Includes Fine motor skills',
                    'Physical / motor writing skills',
                    'Functional writing skills',
                    'Numeracy',
                    'Money management Skills',
                    'Time Skills',
                    'Measurement Skills',
                    'Computation Skills'

                ],
                'Communication Skills'=>[
                    'Receptive communication',
                    'Respond',
                    'Attentive Listening',
                    'Vocabulary',
                    'Verbs',
                    'Adjectives',
                    'Comprehension: Follow Instruction',
                    'Communication – Understanding',
                    'Listening skills',
                    'Informational Listening',
                    'Critical Listening',
                    'Appreciative Listening',
                    'Expressive communication',
                    'Request',
                    'Oral Communication',
                    'Sign and PECs',
                    'Speaking',
                    'Pragmatic communication',
                    'Conversation Skill',
                    'Subjective Questions',
                    'Answering close ended question',
                    'Conversational Questions',
                    'Interpretation (verbal and imagination)'
                ],
                'Communication'=>[
                    'Makes eye contact when listening and speaking',
                    'Stands Or sits with correct posture positioning and distance',
                    'Speaks at an appropriate volume not too loudly or Softly',
                    'Express own work needs to the supervisor with clear meaning',
                    'Interrupt appropriately',
                    'Uses Appropriate greetings and partings',
                    'In conversation use both questioning and volunteering information
                    skills',
                    'Move to a new topic when appropriate',
                    'Give sufficient background information during the conversation so it
                    is easy to understand what she or he is talking about'
                ],
                'Increase of attention span'=>[
                    'Reduce Interference',
                    'Mediation',
                    'Video games',
                    'Puzzle games'
                ],
                'Memory Performance'=>[
                    'Remember instructions from day to day',
                    'Remember where equipment stores at Septra are kept',
                    'Keep track of equipment tools stores Etc without misplacing them',
                    'Use co-workers and supervisors name',
                    'Needs Minimal assistance to remember new activities',
                    'Remember instructions minutes after they are presented'
                ],
                'Aggressiveness and tantrum'=>[
                    'Reasons behind',
                    'Ways to cool down',
                    'Equipment / materials to use',
                    'Safety when has tantrum',
                    'Use o medicine – do or dont'
                ]
            ],     
        ]
    ];

    public $ArrG = [
        'Section G : Domain 03 - Emotional development'=>[
            'Intrapersonal' => [
                'Self understanding' => [
                    'Sense of self',
                    'Understanding self',
                    'Self-Awareness',
                    'Self-Esteem',
                    'Self – Regulation',
                    'Choice making/ Personal choices & values',
                    'Personal values setting',
                    'Roles rights & responsibilities',
                    'Facial and emotional expressions'
                ],
                'Behavior Management' => [
                    'Types of Problem Behavior',
                    'Systematic Manipulation of Environment',
                    'What are the Functions of Behavior?',
                    'Determine the Cause or Function of Behavior?',
                    'Behavior-Modification',
                    'Follow ABCs of Behavior: Rules for Trainers',
                    'Strategy to Manage Problem Behaviors Creating Consequences :',
                    'A: DONT - DO',
                    'B: Functions of Problem Behavior',
                    'C: Dimensions of Behavior',
                    'D: Conducting Functional Assessment'
                ] 
            ],
            'Independent Daily Living Skills'=>[
                'Life Skills'=>[
                    'Personal Care (following ADLs)',
                    'Hygiene: Washing & Showering',
                    'Toileting',
                    'Shaving Routine',
                    'Feminine Hygiene',
                    'Dressing Routines',
                    'Undressing',
                    'Dressing',
                    'Wear Accessories',
                    'Grooming',
                    'Eating and Drinking',
                    'Dinning Etiquette',
                    'Personal Safety',
                    'Basic First Aid Knowledge'
                ],
                'Household maintenance skills'=>[
                    'Home Maintenance',
                    'Operating appliances',
                    'Cleaning & Washing Chores',
                    'Laundry Tasks',
                    'Telephone Skills'
                ],
                'Basic Safety Rules'=>[
                    'Physical Safety'
                ],
                'Meal preparation skills & Knowledge'=>[
                    'How to lit stove',
                    'How to Electric operate oven',
                    'How to measure portion of spices',
                    'Different kind of foods and its uses',
                    'Nutrition value of different kind of foods',
                    'Different kind of cooking',
                    'Different timing of eating'
                ],
                'Healthy Living'=>[
                    'Nutrition',
                    'General Health'
                ],
                'Grocery Shopping & Other Shopping'=>[
                    'Types of items to purchase',
                    'Choosing rights items',
                    'Choosing necessary and luxury items'
                ],
                'Budgeting & Planning'=>[
                    'Using calculator',
                    'Most important, important and unimportant items',
                    'Different needs in daily living',
                    'What to consider in budgeting and planning'
                ],
                'Banking'=>[
                    'Bank account details',
                    'How to open bank account',
                    'Savings',
                    'Why you need bank account'
                ]
            ]
        ]
    ];
    public $ArrH = [
        'Section H : Domain 04 - Social and ethical development'=>[
            'Social Emotional Learning (SEL)' => [
                'Interpersonal Skills' => [
                    'Demonstrating respect for self & others',
                    'Emotions',
                    'Social Awareness'
                ],
                'Work Habit'=>[
                    'Attendance and Punctuality',
                    'Dress and Hygiene',
                    'Relating with others',
                    'Communication (work related)',
                    'Work Readiness',
                    'Managing Emotions (at work area)',
                    'Attention span',
                    'Road and transportation',
                    'Lost and Found',
                    'Emergency / accident situation',
                    'Reaction To Supervision',
                    'Specifications'
                ],
                'Relationships management'=>[
                    'Dealing with Family members',
                    'Dealing with siblings',
                    'Dealing with close relatives',
                    'Dealing with distant relatives',
                    'Dealing with neighbors',
                    'Dealing with unknown people',
                    'Dealing with elderly people',
                    'Dealing with children',
                    'Dealing with people who hurt'
                ]
            ],
            'Leisure & Recreation'=>[
                'Social games'=>[
                    'How to Play with others',
                    'Types of social games'
                ],
                'Outdoor games'=>[
                    'Types of outdoor games',
                    'When and where these can be played',
                    'Play mates'
                ],
                'Indoor games'=>[
                    'Types of outdoor games',
                    'When and where these can be played',
                    'Play mates'
                ],
                'Self centered games'=>[
                    'Benefit of self centered games',
                    'Types of self centered games'
                ]
            ],
            'Social Communication skills'=>[
                'Social Interaction'=>[
                    'Sharing Personal issues',
                    'Topic Maintenance',
                    'Conversational Structure',
                    'Repair Structures',
                    'Interactional - Me and You…',
                    'Wants Explanations - Tell me Why…',
                    'Shares Knowledge & Imaginations - I’ve got something to tell you'
                ]
            ],
            'Ethical Values'=>[
                'Understanding right and wrong'=>[
                    'Respect',
                    'Cheating others',
                    'Telling lies',
                    'Seeking permission',
                    'Using others property'
                ],
                'Social rules Dos and Donts'=>[
                    'Clothing',
                    'Speaking',
                    'Attitude'
                ]
            ]
        ]
    ];    
    
    public $ArrI = [
        'Section I: Independent skills'=>[
            'Self development' => [
                'Personal Management' => [
                    'Managing Behavior and Conduct',
                    'Social Skills',
                    'Sensory Awareness and Management',
                    'Self-Awareness',
                    'Self-Esteem',
                    'Personal Safety',
                    'Building Relationships',
                    'Citizenship',
                    'Self-Advocacy',
                    'Organization',
                    'Personal Hygiene at work place'

                ]
            ],
            'Career planning' => [
                'Career Explanation and Awareness' => [
                    'Decision Making',
                    'Goal Setting',
                    'Conflict Resolution',
                    'Change and Growth'
                ]
            ],
            'Career Preparation' => [
                'Career steps' => [
                    'Resume Development',
                    'Learning Specific Skills for Various Jobs',
                    'Preparing for interview',
                    'Money and Money Management'
                ]
            ]
        ]
    ];
    public function insertData($arr){
        foreach($arr as $domain=>$subdomains){
            $domain = Domain::create(['title'=>$domain]);
            if(is_array($subdomains)){
                foreach($subdomains as $subdomain=>$areas){
                    $subdomain = Subdomain::create(['title'=>$subdomain, 'domain_id'=>$domain->id]);
                    if(is_array($areas)){
                        foreach($areas as $area=>$activities){ 
                            $area = Area::create(['title'=>$area, 'subdomain_id'=>$subdomain->id]);
                            if(is_array($activities)){
                                foreach($activities as $val){
                                    Activity::create(['title'=>$val, 'area_id'=>$area->id]);
                                }
                            }
                        }
                    } 
                }  
            }           
        }
    }

    public function iterateArr(){
        $this->insertData($this->ArrE);
        $this->insertData($this->ArrF);
        $this->insertData($this->ArrG);
        $this->insertData($this->ArrH);
        $this->insertData($this->ArrI);
    }
}