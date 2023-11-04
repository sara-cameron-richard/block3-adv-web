ORIGINAL TABLE 1

| employee_id | name  | job_code | job       | state_code | home_state |
| ----------- | ----- | -------- | --------- | ---------- | ---------- |
| e001        | alice | j01      | chef      | 26         | michigan   |
| e001        | alice | j02      | waiter    | 26         | michigan   |
| e002        | bob   | j02      | waiter    | 56         | wyoming    |
| e002        | bob   | j03      | bartender | 56         | wyoming    |
| e003        | alice | j01      | chef      | 56         | wyoming    |

3NF

Primary Key is employee_id

| employee_id | name  | state_code |
| ----------- | ----- | ---------- |
| e001        | alice | 26         |
| e002        | bob   | 56         |
| e003        | alice | 56         |

Primary key is employee_id + job_code

| employee_id | job_code | job       |
| ----------- | -------- | --------- |
| e001        | j01      | chef      |
| e001        | j02      | waiter    |
| e002        | j02      | waiter    |
| e002        | j03      | bartender |
| e003        | j01      | chef      |

Primary key is state_code

| state_code | home_state |
| ---------- | ---------- |
| 26         | michigan   |
| 26         | michigan   |
| 56         | wyoming    |
| 56         | wyoming    |
| 56         | wyoming    |

---

ORIGINAL TABLE 2

| staff_no | dentist_name  | patient_no | patient_name  | appointment_date | appointment_time | surgery_no |
| -------- | ------------- | ---------- | ------------- | ---------------- | ---------------- | ---------- |
| S1011    | Tony Smith    | P100       | Gillian White | 12 Aug 03        | 10:00            | S10        |
| S1011    | Tony Smith    | P105       | Jill Bell     | 12 Aug 03        | 12:00            | S15        |
| S1024    | Helen Pearson | P108       | Ian MacKay    | 12 Aug 03        | 10:00            | S10        |
| S1024    | Helen Pearson | P108       | Ian MacKay    | 12 Aug 03        | 10:00            | S10        |
| S1032    | Robin Plevin  | P105       | Jill Bell     | 12 Aug 03        | 16:30            | S15        |
| S1032    | Robin Plevin  | P110       | John Walker   | 15 Aug 03        | 18:00            | S13        |

3NF

Primary key is staff_no

| staff_no | dentist_name  |
| -------- | ------------- |
| S1011    | Tony Smith    |
| S1024    | Helen Pearson |
| S1032    | Robin Plevin  |

Primary key is patient_no

| patient_no | patient_name  |
| ---------- | ------------- |
| P100       | Gillian White |
| P105       | Jill Bell     |
| P108       | Ian MacKay    |
| P110       | John Walker   |

Primary key is staff_no + patient_no

| staff_no | patient_no | appointment_date | appointment_time | surgery_no |
| -------- | ---------- | ---------------- | ---------------- | ---------- |
| S1011    | P100       | 12 Aug 03        | 10:00            | S10        |
| S1011    | P105       | 12 Aug 03        | 12:00            | S15        |
| S1024    | P108       | 12 Aug 03        | 10:00            | S10        |
| S1032    | P105       | 12 Aug 03        | 16:30            | S15        |
| S1032    | P110       | 15 Aug 03        | 18:00            | S13        |

---

ORIGINAL TABLE 3

| nin | contractNo | hoursWk | eName | hotelNo | hotelLocation |
| --- | ---------- | ------- | ----- | ------- | ------------- |
| 123 | 24         | 16      | John  | 25      | Edinburgh     |
| 456 | 24         | 24      | Diane | 25      | Edinburgh     |
| 789 | 25         | 28      | Sarah | 4       | Glascow       |
| 123 | 25         | 16      | John  | 4       | Glascow       |

3NF

Primary Key is nin

| nin | eName |
| --- | ----- |
| 123 | John  |
| 456 | Diane |
| 789 | Sarah |

Primary Key is nin + contractNo
(I am assuming that hoursWk is per contract)

| nin | contractNo | hoursWk |
| --- | ---------- | ------- |
| 123 | 24         | 16      |
| 456 | 24         | 24      |
| 789 | 25         | 28      |
| 123 | 25         | 16      |

Primary Key is contractNo

(I wasn't sure about this one: I am assuming that contract number might not always correspond to hotelNo. However, contractNo is redundant if it always correspond to hotelNo. In this case, the table immediately below can be removed completely)

| contractNo | hotelNo |
| ---------- | ------- |
| 24         | 25      |
| 25         | 4       |

Primary Key is hotelNo

| hotelNo | hotelLocation |
| ------- | ------------- |
| 25      | Edinburgh     |
| 4       | Glascow       |

---

ORIGINAL TABLE 4

| book       | genre   | author  | authorNation |
| ---------- | ------- | ------- | ------------ |
| Twenty     | SciFi   | Verne   | Fr           |
| Journey     | SciFi   | Verne   | Fr           |
| Leaves     | Poetry  | Whitman | Am           |
| AK         | LitFic  | Tolstoy | Ru           |
| Confession | AutoBio | Tolstoy | Ru           |

3NF

Primary Key is book

| book       | author  |
| ---------- | ------- |
| Twenty     | Verne   |
| Journey     | Verne   |
| Leaves     | Whitman |
| AK         | Tolstoy |
| Confession | Tolstoy |

Primary Key is author

| author  | authorNation |
| ------- | ------------ |
| Verne   | Fr           |
| Verne   | Fr           |
| Whitman | Am           |
| Tolstoy | Ru           |
| Tolstoy | Ru           |

Primary Key is book

| book       | genre   |
| ---------- | ------- |
| Twenty     | SciFi   |
| Journey     | SciFi   |
| Leaves     | Poetry  |
| AK         | LitFic  |
| Confession | AutoBio |

---

ORIGINAL TABLE 5

| UnitID | StudentID | Date  | TutorID | Topic | Room | Grade | Book | TutEmail |
| ------ | --------- | ----- | ------- | ----- | ---- | ----- | ---- | -------- |
| U1     | St1       | 23/02 | Tut1    | GMT   | 29   | 4.7   | De   | tut1@    |
| U2     | St1       | 18/02 | Tut3    | Gln   | 31   | 5.1   | Ze   | tut3@    |
| U1     | St4       | 23/02 | Tut1    | GMT   | 29   | 4.3   | De   | tut1@    |
| U5     | St2       | 05/02 | Tut3    | Phf   | 32   | 4.9   | Dl   | tut3@    |
| U4     | St2       | 04/02 | Tut5    | AVQ   | 21   | 5.0   | St   | tut5@    |

3NF

I have no idea what some of the column headings represent, so I am making am assumption: Date refers to the start date of the Unit (UnitID) and UnitID refers to "semester"

Primary key is StudentID + Topic

| StudentID | Topic | Grade |
| --------- | ----- | ----- |
| St1       | GMT   | 4.7   |
| St1       | Gln   | 5.1   |
| St4       | GMT   | 4.3   |
| St2       | Phf   | 4.9   |
| St2       | AVQ   | 5.0   |

Primary key = unit + date

| UnitID | Date  | TutorID |
| ------ | ----- | ------- |
| U1     | 23/02 | Tut1    |
| U2     | 18/02 | Tut3    |
| U5     | 05/02 | Tut3    |
| U4     | 04/02 | Tut5    |

Primary key = TutorID

| TutorID | TutEmail |
| ------- | -------- |
| Tut1    | tut1@    |
| Tut3    | tut3@    |
| Tut5    | tut5@    |

Primary key = TutorID

| TutorID | Topic |
| ------- | ----- |
| Tut1    | GMT   |
| Tut3    | Phf   |
| Tut5    | AVQ   |

Primary Key = Topic

| Topic | Book |
| ----- | ---- |
| GMT   | De   |
| Gln   | Ze   |
| Phf   | Dl   |
| AVQ   | St   |

Primary key = Unit + Topic

| UnitID | Topic | Room |
| ------ | ----- | ---- |
| U1     | GMT   | 29   |
| U2     | Gln   | 31   |
| U5     | Phf   | 32   |
| U4     | AVQ   | 21   |
