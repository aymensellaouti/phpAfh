<?php 

class SkillRepository extends Repository {
    const TABLE_NAME = 'skill';
    public function __construct() {
        parent::__construct(self::TABLE_NAME);
    }
}