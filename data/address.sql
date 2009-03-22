BEGIN TRANSACTION;
CREATE TABLE ABGroup (ROWID INTEGER PRIMARY KEY AUTOINCREMENT, Name TEXT, ExternalIdentifier TEXT, StoreID INTEGER);
CREATE TABLE ABGroupChanges (record INTEGER, type INTEGER, ExternalIdentifier TEXT, StoreID INTEGER);
CREATE TABLE ABGroupMembers (UID INTEGER PRIMARY KEY, group_id INTEGER, member_type INTEGER, member_id INTEGER, UNIQUE(group_id, member_type, member_id));
CREATE TABLE ABMultiValue (UID INTEGER PRIMARY KEY, record_id INTEGER, property INTEGER, identifier INTEGER, label INTEGER, value TEXT);
INSERT INTO ABMultiValue VALUES(1,1,3,0,1,'01 01 01 01 01');
INSERT INTO ABMultiValue VALUES(2,1,3,0,4,'02 02 02 02 02');
INSERT INTO ABMultiValue VALUES(3,2,3,0,1,'03 03 03 03 03');
INSERT INTO ABMultiValue VALUES(4,1,4,0,2,'mail@mail.tld');

CREATE TABLE ABMultiValueEntry (parent_id INTEGER, key INTEGER, value TEXT, UNIQUE(parent_id, key));

CREATE TABLE ABMultiValueEntryKey (value TEXT, UNIQUE(value));
INSERT INTO ABMultiValueEntryKey VALUES('Street');
INSERT INTO ABMultiValueEntryKey VALUES('ZIP');
INSERT INTO ABMultiValueEntryKey VALUES('City');
INSERT INTO ABMultiValueEntryKey VALUES('CountryCode');
INSERT INTO ABMultiValueEntryKey VALUES('State');
INSERT INTO ABMultiValueEntryKey VALUES('Country');

CREATE TABLE ABMultiValueLabel (value TEXT, UNIQUE(value));
INSERT INTO ABMultiValueLabel VALUES('_$!<Mobile>!$_');
INSERT INTO ABMultiValueLabel VALUES('_$!<Home>!$_');
INSERT INTO ABMultiValueLabel VALUES('_$!<HomePage>!$_');
INSERT INTO ABMultiValueLabel VALUES('_$!<Work>!$_');
INSERT INTO ABMultiValueLabel VALUES('_$!<Other>!$_');
INSERT INTO ABMultiValueLabel VALUES('_$!<Main>!$_');

CREATE TABLE ABPerson (ROWID INTEGER PRIMARY KEY AUTOINCREMENT, First TEXT, Last TEXT, Middle TEXT, FirstPhonetic TEXT, MiddlePhonetic TEXT, LastPhonetic TEXT, Organization TEXT, Department TEXT, Note TEXT, Kind INTEGER, Birthday TEXT, JobTitle TEXT, Nickname TEXT, Prefix TEXT, Suffix TEXT, FirstSort TEXT, LastSort TEXT, CreationDate INTEGER, ModificationDate INTEGER, CompositeNameFallback TEXT, ExternalIdentifier TEXT, StoreID INTEGER, DisplayName TEXT, FirstSortSection TEXT, LastSortSection TEXT, FirstSortLanguageIndex INTEGER DEFAULT 2147483647, LastSortLanguageIndex INTEGER DEFAULT 2147483647);
INSERT INTO ABPerson VALUES(1,'Robert','Ploutchouf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'','',218068293,257758604,NULL,NULL,0,NULL,'?','K',0,0);
INSERT INTO ABPerson VALUES(2,'Suzette','La crepe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,-547783200.000000,NULL,NULL,NULL,NULL,'','',218068665,253056171,NULL,NULL,0,NULL,'?',7,0,0);

CREATE TABLE ABPersonChanges (record INTEGER, type INTEGER, Image INTEGER, ExternalIdentifier TEXT, StoreID INTEGER);

CREATE TABLE ABPersonMultiValueDeletes (record_id INTEGER, property_id INTEGER, identifier INTEGER);

CREATE TABLE ABPersonSearchKey (person_id INTEGER, value BLOB, UNIQUE(person_id));

CREATE TABLE ABPhoneLastFour (multivalue_id INTEGER PRIMARY KEY, value TEXT);

CREATE TABLE ABRecent(date INTEGER, name, property INTEGER, value);

CREATE TABLE ABStore (ROWID INTEGER PRIMARY KEY AUTOINCREMENT, Name TEXT, ExternalIdentifier TEXT, Type INTEGER, ConstraintsPath TEXT, ExternalModificationTag TEXT, StoreInternalIdentifier TEXT, AccountIdentifier TEXT, UNIQUE(StoreInternalIdentifier));

CREATE TABLE FirstSortSectionCount(LanguageIndex, Section TEXT, StoreID, number, UNIQUE(LanguageIndex, Section, StoreID));

CREATE TABLE LastSortSectionCount(LanguageIndex, Section TEXT, StoreID, number, UNIQUE(LanguageIndex, Section, StoreID));

CREATE TABLE _SqliteDatabaseProperties (key TEXT, value TEXT, UNIQUE(key));
-- CREATE TABLE sqlite_sequence(name,seq);
CREATE INDEX ABFirstSortIndex on ABPerson(FirstSortLanguageIndex, FirstSortSection, FirstSort);
CREATE INDEX ABFirstSortStore on ABPerson(StoreID, FirstSortLanguageIndex, FirstSortSection, FirstSort);
CREATE INDEX ABLastSortIndex on ABPerson(LastSortLanguageIndex, LastSortSection, LastSort);
CREATE INDEX ABMultiValueEntryKeyIndex ON ABMultiValueEntry(key);
CREATE INDEX ABMultiValueLabelIndex ON ABMultiValue(label);
CREATE INDEX ABMultiValueRecordIDIndex on ABMultiValue(record_id);
CREATE INDEX ABPhoneLastFourIndex ON ABPhoneLastFour(value);
CREATE INDEX ABRecent_date_index ON ABRecent(property, date);
CREATE INDEX ABRecent_value_index ON ABRecent(property, value);
COMMIT;
