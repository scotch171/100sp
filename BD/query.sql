-- выборка всех категорий верхнего уровня, начинающихся на “авто”
SELECT name
FROM category
where parent_category_id is null
  and name LIKE 'Авто%' ;


-- На выборку всех категорий, имеющих не более трёх подкатегорий следующего уровня (без глубины)
select cnt, parent_category_id
FROM (SELECT count(parent_category_id) as cnt,
             parent_category_id
      FROM category
      group by parent_category_id) as b
WHERE cnt < 3;

-- На выборку всех категорий нижнего уровня (т.е. не имеющих детей)
SELECT a.name FROM db_test.category as a
where NOT exists (select b.parent_category_id from category as b WHERE a.id = b.parent_category_id );