<?php 

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
        public function run()
        {
                $faker = \Faker\Factory::create();

                for($i=0;$i<10;$i++)
                {
                        $data = [
                                'userId' => $faker->randomDigit,
                                'name' => $faker->name,
                                'username' => $faker->username,
                                'password' => $faker->password,
                                'noTelp' => $faker->e164PhoneNumber,
                                'active' => 'Y',
                                'accessCd' => '1',
                                'created_at' => date("Y-m-d H:i:s"),
                                'updated_at' => date("Y-m-d H:i:s"),
                        ];     
                        print_r($data);
                        $this->db->table('tblusers')->insert($data);
                }
                
        }
}