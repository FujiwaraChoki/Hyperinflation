DROP DATABASE IF EXISTS Hyperinflation;

CREATE DATABASE Hyperinflation;

USE Hyperinflation;

CREATE TABLE informationen
(
    id     INT  NOT NULL AUTO_INCREMENT,
    identifier VARCHAR(255) NOT NULL,
    titel VARCHAR(255) NOT NULL,
    inhalt TEXT NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO informationen
(identifier, titel, inhalt)
VALUES ("inflation", "Die Hyperinflation von 1923", "
Die Hyperinflation von 1923 war eine Inflation in Deutschland,
die in der Zeit von 1921 bis 1923 stattfand.
Sie wurde durch die Währungsreform von 1923,
die Einführung des Rentenmark, beendet.
Die Inflation war die Folge einer starken Wirtschaftskrise,
die durch eine hohe Arbeitslosigkeit, eine hohe Inflation und
einen Rückgang der Wirtschaftsleistung gekennzeichnet war.
Die Inflation war eine der größten in der Geschichte der Menschheit.
Sie wurde von den meisten deutschen Zeitungen als
'Wirtschaftskrise' bezeichnet, die von der Regierung ignoriert wurde.
Die Folgen der Inflation waren so groß, dass sie die Weimarer Republi
in Deutschland zerstörte und den Weg für den Nationalsozialismus ebnete.
Die Inflation hatte auch einen großen Einfluss auf die Weltwirtschaft,
da sie die Inflation in anderen Ländern wie Österreich und der
Tschechoslowakei verursachte. Die Inflation war auch ein Grund für
die Weltwirtschaftskrise von 1929, da sie die Weltwirtschaftskrise
von 1929 verursachte. Die Inflation führte zu einer weltweiten Depression,
die als 'große Depression' bekannt ist. Die Inflation war eine der
größten in der Geschichte der Menschheit und hatte einen großen Einfluss
auf die Weltwirtschaft.
");

INSERT INTO informationen
(identifier, titel, inhalt)
VALUES ("wmrpblk", "Die Weimarer Republik", "
Aus den revolutionären Erschütterungen der unmittelbaren Nachkriegszeit
ging das Deutsche Reich als parlamentarische Demokratie hervor.
Während viele Deutsche mit dem politischen Neubeginn die Hoffnung auf
Überwindung von Nationalismus und gesellschaftlichen Normen verbanden,
verbitterte und radikalisierte soziale Not Millionen Menschen.
Als eine ebenso große Hypothek für die politische Stabilität erwiesen sich die
häufigen Wechsel der insgesamt 16 Reichsregierungen innerhalb von 14 Jahren.
In ihren schweren Anfangsjahren wurde die Republik von linken
und rechten Extremisten bekämpft, die immer wieder gewaltsame
Aufstände entfachten. Erst 1924 begann in Deutschland eine Phase
relativer Stabilität. Für die Republik war es bis 1929 eine Zeit
innenpolitischer Ruhe mit wirtschaftlichem Aufschwung und kultureller
Blüte. Die 'Goldenen Zwanziger' endeten mit der im Oktober 1929 beginnende
Weltwirtschaftskrise, in der Armut und Verzweiflung schnell um sich griffen.
Mit Erfolg entfesselten die Gegner der Weimarer Republik von rechts und links
eine beispiellose Agitation gegen den Staat,
der keine Mittel gegen die wirtschaftliche und politische Krise fand.");

INSERT INTO informationen
(identifier, titel, inhalt)
VALUES ("hyperinflationDesc", "Was ist eine Hyperinflation?",
"Hyperinflation ist eine Form der Inflation,
in der sich das Preisniveau sehr schnell erhöht.
Eine allgemein akzeptierte Definition existiert nicht,
eine 1956 von Phillip D. Cagan aufgestellte Faustregel
von monatlichen Inflationsraten von 50 %
(entsprechend einer jährlichen Rate von umgerechnet rund 13.000 %)
ist aber weit verbreitet. Vereinfacht ausgedrückt ist eine Hyperinflation
eine unkontrollierbare Inflation mit extrem hoher monatlicher Rate.
Meist dauern Hyperinflationen nur eine kurze Zeit und enden in einer
Währungsreform.");