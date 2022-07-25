-- • There is a `t` table with 3 fields:
-- `uid` - user ID
-- `dt` - date and time of message
-- `s` - text of the message

-- Each message gets its own row in the database.
-- Write an SQL query to retrieve date and text of the latest messages of every user.




-- Data Sample
-- uid      dt                          s
-- 1	    2022-07-21 05:00:00.000	    srejterjrejs
-- 1	    2022-07-21 14:00:00.000	    pyuirttsdhj
-- 3	    2022-07-08 09:00:00.000	    qaewrstksdtym
-- 2	    2022-07-17 15:00:00.000	    mhgtdhsrtureaso
-- 1	    2022-07-18 05:00:00.000	    osrtxjsrtjksrtj
-- 2	    2022-07-19 05:00:00.000	    xdrtrjsrksrtksrektjs
-- 3	    2022-07-13 05:00:00.000	    bseitrslksrhsehserhse
-- 2	    2022-07-21 14:00:00.000	    yseyrujkltu.tyukjr

-- Query
Select dt, s 
From tbl
Where dt in (select max(dt) from tbl group by uid)
Order By uid;

-- Query Result
-- dt                       s
-- 2022-07-21 14:00:00.000	pyuirttsdhj
-- 2022-07-21 14:00:00.000	yseyrujkltu.tyukjr
-- 2022-07-13 05:00:00.000	bseitrslksrhsehserhse